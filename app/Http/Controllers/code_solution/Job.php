<?php
namespace  App\Http\Controllers\code_solution;

    class Job{
        private int $id;
        private String $name;
        private String $log;
        private int $retrycount;
        private String $status;
        private String $error;
        private ?String  $created_at;
        private ? String  $updated_at;
        private ? String  $deleted_at;


    public function __construct( $name, $log, $retrycount, $status,  $error ){
            $this->name = $name;
            $this->log = $log;
            $this->retrycount = $retrycount;
            $this->status = $status;
            $this->error = $error;
            $this->created_at = date('Y-m-d H:i:s');
            $this->updated_at = date('Y-m-d H:i:s');

            /* please always execute this method */
            $this->saveFile();
    }

    public function saveFile(){
        /* please create and store the file in via this method  */
        ## this is the requirement:
        ## Log each job's execution, including its class, method, and status (success or failure).

        # please change the directory name throught the variable: log_directory
        $log_directory = "C:/xampp/htdocs/projphp/laraadminpanel/storage/logs/job_processing_logs";
        $afilename = $log_directory . "/background_jobs_errors_"
                . date('Y-m-d His') . '.log';  # H:i:s
        $filewrite = fopen( $afilename , "w") or die("Unable to open file!"); # . ".txt"
        $job_run_results = "Name: " . $this->getName() . "\n" .
                           "Log: " . $this->getLog()  . "\n"   .
                           "RetryCount: " . $this->getRetryCount()  . "\n"  .
                           "Status: " . $this->getStatus()  . "\n" .
                           "Error: " . $this->getError()  ;
        fwrite($filewrite, $job_run_results);
        fclose($filewrite);

    }

    public function downloadFiles( int $downloadmaxSize ){
        # idealy, there would be more code here to execute a task
        echo "Downloading files";
    }

    public function uploadFiles( int $uploadMaxSize){
        # idealy, there would be more code here to execute a task
        echo "Uploading files";
    }

    public function getDateTime(){
        return  'date diff example: ' . date('Y-m-d H:i:s', time() - 60 * 60 * 24) . "\n";
    }

    public function getId(){
        return $this->id;
    }

    public function getRetryCount(){
        return $this->retrycount;
    }
    public function getStatus(){
        return $this->status;
    }

    public function getError(){
        return $this->error;
    }

    public function getCreatedAt(){
        return $this->created_at;
    }

    public function getName(){
        return $this->name;
    }

    public function getUpdatedAt(){
        return $this->updated_at;
    }

    public function getDeletedAt(){
        return $this->deleted_at;
    }

    public function getLog(){
        return $this->log;
    }

}


?>
