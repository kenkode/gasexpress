<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobGroupTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_group', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('job_group_name');
			$table->integer('organization_id')->unsigned()->default('0')->index('job_group_organization_id_foreign');
			$table->timestamps();
		});
		DB::table('job_group')->insert(array(
            array('job_group_name' => 'Junior Staff','organization_id' => '1'),
            array('job_group_name' => 'Management','organization_id' => '1'),
            array('job_group_name' => 'Marketing','organization_id' => '1'),
        ));
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('job_group');
	}

}
