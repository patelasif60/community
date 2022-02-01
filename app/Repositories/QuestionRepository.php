<?php

namespace App\Repositories;
use App\Models\Question;

/**
 * Repository class for model.
 */
class QuestionRepository extends BaseRepository
{

    public function getData($data)
    {
        return new Question;
	}


    public function insertData($data)
    {
    	
    	$question = Question::create([
            'title'    => $data['title'],
            'content'  => $data['content'],
        ]);
		return $question;
	}


    public function updateData($data, $id)
    {
    	$question = Question::find($id);
		$question->title = $data['title'];
    	$question->content = $data['content'];
    	$question->save();
    	return $question;
    }

	public function deleteData($id)
    {
        return Question::where('id',$id)->delete();
    }
}