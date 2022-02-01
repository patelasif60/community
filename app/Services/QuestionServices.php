<?php

namespace App\Services;

use App\Repositories\QuestionRepository;
use App\Http\Resources\Question\Question as QuestionResource;
/**
 * News class to handle operator interactions.
 */
class QuestionServices
{
    public function __construct(QuestionRepository $repository)
    {
        $this->repository = $repository;
    }


    public function getData($data)
    {

        $page = $data->page ? $data->page : 1;
        $limit = $data->size ? $data->size : 10;
        $offset = ($page - 1) * $limit;

        $query = $this->repository->getData($data);

        $total_records = $query->count();
        if($data->type!= 'all'){
            $query =  $query->skip($offset)->take($limit);
        }
        $query= $query->get();
        $total_pages = ceil($total_records / $limit);
        $dataQuestion = QuestionResource::collection($query);

        return response()->json([
           'total_records' => $total_records,
           'total_pages' => $total_pages,
           'current_page' => $data->type=='all'? 1: $page,
           'page_size' => $data->type=='all'? $total_records : $limit,
           'QuestionData' => $dataQuestion,
        ]);
    }


    public function insertData($data)
    {
      $data = $this->repository->insertData($data);
      return response()->json([
            'message'=> 'Record add successfully',
            //'QuestionData' => $data,
        ]); 
    }


    public function updateData($data,$id)
    {
        return $this->repository->updateData($data,$id);
    }


    public function deleteData($id)
    {
        return $this->repository->deleteData($id);
        
    }
}