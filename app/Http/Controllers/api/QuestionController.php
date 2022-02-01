<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Services\QuestionServices;
use Validator;
//use App\Http\Requests\Api\Question\StoreRequest;


class QuestionController extends BaseController
{
    /**
     * The news service instance.
     *
     * @var service
     */
    public function __construct(QuestionServices $service)
    {
        $this->service = $service;
    }
     /**
     * Get Questions
     * 
     * @return \Illuminate\Http\Response
     */
    public function getData(Request $request)
    {
        return $this->service->getData($request);     
    }
     /**
     * insert Questions
     * 
     * @return \Illuminate\Http\Response
     */
    public function insertData(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'content' => 'required',
        ]);
        if ($validator->fails()) {
           return response()->json([
            'Error' => $validator->messages()
            ]);
        }
        return $this->service->insertData($request);
        
    }
     /**
     * Update Questions
     *
     * @return \Illuminate\Http\Response
     */
    public function updateData(Request $request , $id)
    {
         $this->service->updateData($request,$id);
         return response()->json([
            'message' => 'Record Updated',
        ]);
    }
     /**
     * Delete Questions
     * 
     * @return \Illuminate\Http\Response
     */
    public function deleteData($id)
    {
        $this->service->deleteData($id);
        return response()->json([
            'message' => 'Record deteled',
        ]);
    }
}
