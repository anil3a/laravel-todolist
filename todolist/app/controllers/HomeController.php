<?php
/**
 * User: Anil
 * Date: 20/10/2014
 * Time: 10:50 AM
 * Home Controller
 */
class HomeController extends BaseController {

	public function getIndex()
	{
        $tasks = Auth::user()->tasks()->paginate(6);
		return View::make('home')->with('tasks', $tasks);
	}

    public function postIndex()
    {
        $id = Input::get('id');
        $userId = Auth::user()->id;
        $task = Task::findOrFail($id);

        if($task->owner_id == $userId) {
            $task->mark();
        }
        return Redirect::route('home');
    }

    public function getNew()
    {
        return View::make('new');
    }


    public function postNew()
    {
        $rules = array( 'name' => 'required|min:3|max:255');
        $validator = Validator::make(Input::all(), $rules);
        $userId = Auth::user()->id;

        if($validator->fails())
        {
            return Redirect::route('new')->withErrors($validator);
        }

        $task = new Task;
        $task->name = Input::get('name');
        $task->owner_id = $userId;
        $task->save();

        return Redirect::route('home');

    }

    public function getDelete(Task $task)
    {
        if( $task->owner_id == Auth::user()->id)
        {
            $task->delete();
        }
        return Redirect::route('home');

    }

}
