<?php

namespace App\Http\Controllers;
use App\Http\Controllers\code_solution\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

# use App\Models\Job;

class JobExecuteController extends Controller
{
       public Job $job;
       public function __construct(){

       }

        /* user added code  */
        public function executeJob(){
            $this->testData();
            # $this->runBackgroundJob();
            return $this->job->getCreatedAt() . ', ' . $this->job->getName() . ', ' . $this->job->getStatus();
        }

        # Accept a class name, method, and parameters as inputs.

        public function testData(/* Job $job */){
            $this->job = new Job(4, 'Job successfully executed', 3, 'Successful', 'No error found');
            // return $this->job;
        }

        public function runBackgroundJob( Request $request){

            $validator = Validator::make(
                $request->all(),
                [
                    'name'     => 'required|string|between:5,100',
                    'log'    => 'required|string',
                    'retrycount' => 'required|integer|max:5',
                    'status' => 'required|string',
                    'error' => 'required|string',
                    'method' => 'required|string',
                ]
            );

            if ($validator->fails()) {
                return response()->json(
                    [$validator->errors()],
                    422
                );
            }else{
                $this->job = new Job($request->name, $request->log, $request->retrycount, $request->status, $request->error);


                $methodexec = $request->method;
                /* use an if statement to execute the specific method */
                if($request->method == 'downloadFiles' && isset($request->downloadmaxSize)){
                    $this->job->downloadFiles( $request->downloadmaxSize );
                }

                /* use an if statement to execute the specific method */
                if($request->method == 'uploadFiles' && isset($request->downloadmaxSize)){
                    $this->job->uploadMaxSize( $request->uploadMaxSize );
                }


                $method_exec = $request->method ;
                # $this->job->method_exec;
                // $this->job::$request->method();

                "..\.." . \App\Models\Job::create( [
                    $this->job->getName(),
                    $this->job->getLog(),
                    (int)$this->job->getRetryCount(),
                    $this->job->getStatus(),
                    $this->job->getError(),
                ])  ;
                # return print_r($this->job); # (array)
                return json_decode(json_encode($this->job->getLog()), true);
            }


            if( isset($request->name) && isset($request->log) &&
                isset($request->retrycount) && isset($request->status) && isset($request->error)){

            }else{
                return "Please provide valid data and make sure all the mandatory fields have values";
            }

        }
}
