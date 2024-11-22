<?php

$filename ='background_jobs_errors_' . date('Y-m-d H:i:s') . '.log';

echo 'date diff example: ' . date('Y-m-d H:i:s', time() - 60 * 60 * 24) . "\n";

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


    public function __construct(  $id, $name, $log, $retrycount, $status,  $error, $created_at, $updated_at, $deleted_at){
            $this->id = $name;
            $this->log = $log;
            $this->retrycount = $retrycount;
            $this->status = $status;
            $this->error = $error;
            $this->created_at = $created_at;
            $this->updated_at = $updated_at;
            $this->deleted_at = $deleted_at;
    }

    public function getDateTime(){
        return  'date diff example: ' . date('Y-m-d H:i:s', time() - 60 * 60 * 24) . "\n";
    }


}
    /*
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();

    */

?>
