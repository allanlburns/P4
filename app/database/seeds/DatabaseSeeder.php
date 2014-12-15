<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$burns = new User;
		$burns->first_name = 'Allan';
		$burns->last_name = 'Burns';
		$burns->email = 'allanlburns@yahoo.com';
		$burns->address = '104 Brooks St. Brighton, MA';
		$burns->phone = '(555) 555-5555';
		$burns->birthday = '04/22/1986';
		$burns->store_id = 2;
		$burns->save();

		$tobin = new User;
		$tobin->first_name = 'Pat';
		$tobin->last_name = 'Tobin';
		$tobin->email = 'p.tobin.junior.the5th@gmail.com';
		$tobin->address = '586 Washington Street Jamaica Plain, MA 02135';
		$tobin->phone = '(555) 555-5555';
		$tobin->birthday = '04/18/1986';
		$tobin->store_id = 4;
		$tobin->save();

		$jazz = new User;
		$jazz->first_name = 'Jimmy';
		$jazz->last_name = 'Jazz';
		$jazz->email = 'jimmy_jazz@yahoo.com';
		$jazz->address = '9 Oxford St. Brixton, UK 20135';
		$jazz->phone = '(555) 555-5555';
		$jazz->birthday = '04/18/1979';
		$jazz->store_id = 1;
		$jazz->save();

		$pinkman = new User;
		$pinkman->first_name = 'Jesse';
		$pinkman->last_name = 'Pinkman';
		$pinkman->email = 'j.pinkman@juno.com';
		$pinkman->address = '102 Kennedy St. Brockton, MA 02301';
		$pinkman->phone = '(555) 555-5555';
		$pinkman->birthday = '10/22/1987';
		$pinkman->store_id = 3;
		$pinkman->save();

		

	}

}
