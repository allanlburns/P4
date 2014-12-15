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
		$burns->password = '$2y$10$Y4Cuv/qtq3UEsQNQpTcrTOs8r5XH3BY01xCjN6WJQ8K5HFfKSA/PK';
		$burns->save();

		$tobin = new User;
		$tobin->first_name = 'Pat';
		$tobin->last_name = 'Tobin';
		$tobin->email = 'p.tobin.junior.the5th@gmail.com';
		$tobin->address = '586 Washington Street Jamaica Plain, MA 02135';
		$tobin->phone = '(555) 555-5555';
		$tobin->birthday = '04/18/1986';
		$tobin->store_id = 4;
		$tobin->password = '$2y$10$xMXVgF6o0.LaemD8iQv3KOKLd6W8LToXIk96goCyRBh.GigzpmsA2';
		$tobin->save();

		$jazz = new User;
		$jazz->first_name = 'Jimmy';
		$jazz->last_name = 'Jazz';
		$jazz->email = 'jimmy_jazz@yahoo.com';
		$jazz->address = '9 Oxford St. Brixton, UK 20135';
		$jazz->phone = '(555) 555-5555';
		$jazz->birthday = '04/18/1979';
		$jazz->store_id = 1;
		$jazz->password = '$2y$10$cPlwmXRLjumPvAMhphCGDenHUFNLmXoqLIynhXGUo1k.BNHbV2cfS';
		$jazz->save();

		$pinkman = new User;
		$pinkman->first_name = 'Jesse';
		$pinkman->last_name = 'Pinkman';
		$pinkman->email = 'j.pinkman@juno.com';
		$pinkman->address = '102 Kennedy St. Brockton, MA 02301';
		$pinkman->phone = '(555) 555-5555';
		$pinkman->birthday = '10/22/1987';
		$pinkman->store_id = 3;
		$pinkman->password = '$2y$10$lUyFeACND/1N8nASUo.16uIrzmG91XRSzjKeusDS/GswwIWG.KfO6';
		$pinkman->save();

		$raheem = new User;
		$raheem->first_name = 'Radio';
		$raheem->last_name = 'Raheem';
		$raheem->email = 'dotherightthing@yahoo.com';
		$raheem->address = '132 Jones St. Brockton, MA 02301';
		$raheem->phone = '(555) 555-5555';
		$raheem->birthday = '06/30/1989';
		$raheem->store_id = 3;
		$raheem->password = '$2y$10$D2YPUmpHU.6K.aXeWzCZdeuTLcFaZJ5OpCVpa6qGstxEOdpZWvWzS';
		$raheem->save();

		$blackmon = new User;
		$blackmon->first_name = 'Mars';
		$blackmon->last_name = 'Blackmon';
		$blackmon->email = 'shesgottahaveit@yahoo.com';
		$blackmon->address = '40 Acres St. Cambridge, MA 02148';
		$blackmon->phone = '(555) 555-5555';
		$blackmon->birthday = '08/08/1986';
		$blackmon->store_id = 8;
		$blackmon->password = 'Dylf7DeOSOvilLlBtsDgPtLWFCzk249xya1tStNzYitfLLqR9Q8ldDUdkLBn';
		$blackmon->save();
		



	}

}
