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

		$quincy = new Store;
		$quincy->store_name = 'Quincy';
		$quincy->save();

		$allston = new Store;
		$allston->store_name = 'Allston';
		$allston->save();

		$brockton = new Store;
		$brockton->store_name = 'Brockton';
		$brockton->save();

		$norwood = new Store;
		$norwood->store_name = 'Norwood';
		$norwood->save();

		$malden = new Store;
		$malden->store_name = 'Malden';
		$malden->save();

		$newbedford = new Store;
		$newbedford->store_name = 'New Bedford';
		$newbedford->save();

		$coolidge = new Store;
		$coolidge->store_name = 'Coolidge Corner';
		$coolidge->save();

		$harvard = new Store;
		$harvard->store_name = 'Harvard Square';
		$harvard->save();

		$avengers = new Comic;
		$avengers->title = 'Avengers';
		$avengers->publisher = 'Marvel';
		$avengers->save();

		$avengersai = new Comic;
		$avengersai->title = 'Avengers A.I.';
		$avengersai->publisher = 'Marvel';
		$avengersai->save();

		$avengersundercover = new Comic;
		$avengersundercover->title = 'Avengers Undercover';
		$avengersundercover->publisher = 'Marvel';
		$avengersundercover->save();

		$avengersworld = new Comic;
		$avengersworld->title = 'Avengers World';
		$avengersworld->publisher = 'Marvel';
		$avengersworld->save();

		$blackwidow = new Comic;
		$blackwidow->title = 'Black Widow';
		$blackwidow->publisher = 'Marvel';
		$blackwidow->save();

		$captainamerica = new Comic;
		$captainamerica->title = 'Captain America';
		$captainamerica->publisher = 'Marvel';
		$captainamerica->save();

		$captainmarvel = new Comic;
		$captainmarvel->title = 'Captain Marvel';
		$captainmarvel->publisher = 'Marvel';
		$captainmarvel->save();

		$daredevil = new Comic;
		$daredevil->title = 'Daredevil';
		$daredevil->publisher = 'Marvel';
		$daredevil->save();

		$deadlyhands = new Comic;
		$deadlyhands->title = 'Deadly Hands of Kung-Fu';
		$deadlyhands->publisher = 'Marvel';
		$deadlyhands->save();

		$deadpool = new Comic;
		$deadpool->title = 'Deadpool';
		$deadpool->publisher = 'Marvel';
		$deadpool->save();

		$dexter = new Comic;
		$dexter->title = 'Dexter';
		$dexter->publisher = 'Marvel';
		$dexter->save();

		$elektra = new Comic;
		$elektra->title = 'Elektra';
		$elektra->publisher = 'Marvel';
		$elektra->save();

		$empire = new Comic;
		$empire->title = 'Empire of the Dead';
		$empire->publisher = 'Marvel';
		$empire->save();

		$fantasticfour = new Comic;
		$fantasticfour->title = 'Fantastic Four';
		$fantasticfour->publisher = 'Marvel';
		$fantasticfour->save();

		$fearlessdefenders = new Comic;
		$fearlessdefenders->title = 'Fearless Defenders';
		$fearlessdefenders->publisher = 'Marvel';
		$fearlessdefenders->save();

		$figment = new Comic;
		$figment->title = 'Figment';
		$figment->publisher = 'Marvel';
		$figment->save();

		$ghostrider = new Comic;
		$ghostrider->title = 'Ghost Rider';
		$ghostrider->publisher = 'Marvel';
		$ghostrider->save();

		$gotg = new Comic;
		$gotg->title = 'Guardians of the Galaxy';
		$gotg->publisher = 'Marvel';
		$gotg->save();

		$hawkeye = new Comic;
		$hawkeye->title = 'Hawkeye';
		$hawkeye->publisher = 'Marvel';
		$hawkeye->save();

		$hulk = new Comic;
		$hulk->title = 'Hulk';
		$hulk->publisher = 'Marvel';
		$hulk->save();

		$inhuman = new Comic;
		$inhuman->title = 'Inhuman';
		$inhuman->publisher = 'Marvel';
		$inhuman->save();

		$ironfist = new Comic;
		$ironfist->title = 'Iron Fist';
		$ironfist->publisher = 'Marvel';
		$ironfist->save();

		$ironman = new Comic;
		$ironman->title = 'Superior Iron Man';
		$ironman->publisher = 'Marvel';
		$ironman->save();

		$ironpatriot = new Comic;
		$ironpatriot->title = 'Iron Patriot';
		$ironpatriot->publisher = 'Marvel';
		$ironpatriot->save();

		$invaders = new Comic;
		$invaders->title = 'All-New Invaders';
		$invaders->publisher = 'Marvel';
		$invaders->save();

		$loki = new Comic;
		$loki->title = 'Loki: Agent of Asgard';
		$loki->publisher = 'Marvel';
		$loki->save();

		$mightyavengers = new Comic;
		$mightyavengers->title = 'Might Avengers';
		$mightyavengers->publisher = 'Marvel';
		$mightyavengers->save();

		$miracleman = new Comic;
		$miracleman->title = 'Miracleman';
		$miracleman->publisher = 'Marvel';
		$miracleman->save();

		$moonknight = new Comic;
		$moonknight->title = 'Moon Knight';
		$moonknight->publisher = 'Marvel';
		$moonknight->save();

		$msmarvel = new Comic;
		$msmarvel->title = 'Ms. Marvel';
		$msmarvel->publisher = 'Marvel';
		$msmarvel->save();

		$newavengers = new Comic;
		$newavengers->title = 'New Avengers';
		$newavengers->publisher = 'Marvel';
		$newavengers->save();

		$newwarriors = new Comic;
		$newwarriors->title = 'New Warriors';
		$newwarriors->publisher = 'Marvel';
		$newwarriors->save();

		$nova = new Comic;
		$nova->title = 'Nova';
		$nova->publisher = 'Marvel';
		$nova->save();

		$originalsin = new Comic;
		$originalsin->title = 'Original Sin';
		$originalsin->publisher = 'Marvel';
		$originalsin->save();

		$painkillerjane = new Comic;
		$painkillerjane->title = 'Painkiller Jane';
		$painkillerjane->publisher = 'Marvel';
		$painkillerjane->save();

		$punisher = new Comic;
		$punisher->title = 'Punisher';
		$punisher->publisher = 'Marvel';
		$punisher->save();

		$savagehulk = new Comic;
		$savagehulk->title = 'Savage Hulk';
		$savagehulk->publisher = 'Marvel';
		$savagehulk->save();

		$secretavengers = new Comic;
		$secretavengers->title = 'Secret Avengers';
		$secretavengers->publisher = 'Marvel';
		$secretavengers->save();

		$shehulk = new Comic;
		$shehulk->title = 'She-Hulk';
		$shehulk->publisher = 'Marvel';
		$shehulk->save();

		$silversurfer = new Comic;
		$silversurfer->title = 'Silver Surfer';
		$silversurfer->publisher = 'Marvel';
		$silversurfer->save();

		$thor = new Comic;
		$thor->title = 'Thor';
		$thor->publisher = 'Marvel';
		$thor->save();

		$thunderbolts = new Comic;
		$thunderbolts->title = 'Thunderbolts';
		$thunderbolts->publisher = 'Marvel';
		$thunderbolts->save();

		$whatif = new Comic;
		$whatif->title = 'What If?';
		$whatif->publisher = 'Marvel';
		$whatif->save();

		$uncannyavengers = new Comic;
		$uncannyavengers->title = 'Uncanny Avengers';
		$uncannyavengers->publisher = 'Marvel';
		$uncannyavengers->save();

		$youngavengers = new Comic;
		$youngavengers->title = 'Young Avengers';
		$youngavengers->publisher = 'Marvel';
		$youngavengers->save();

		$asm = new Comic;
		$asm->title = 'Amazing Spider-Man';
		$asm->publisher = 'Marvel';
		$asm->save();

		$spidey2099 = new Comic;
		$spidey2099->title = 'Spider-Man 2099';
		$spidey2099->publisher = 'Marvel';
		$spidey2099->save();

		$muavengers = new Comic;
		$muavengers->title = 'Marvel Universe: Avengers Assemble';
		$muavengers->publisher = 'Marvel';
		$muavengers->save();

		$muspidey = new Comic;
		$muspidey->title = 'Marvel Universe: Spider-Man';
		$muspidey->publisher = 'Marvel';
		$muspidey->save();

		$oz = new Comic;
		$oz->title = 'Oz Comics';
		$oz->publisher = 'Marvel';
		$oz->save();

		$miles = new Comic;
		$miles->title = 'Miles Morales: Ultimate Spider-Man';
		$miles->publisher = 'Marvel';
		$miles->save();

		$ultimates = new Comic;
		$ultimates->title = 'All-New Ultimates';
		$ultimates->publisher = 'Marvel';
		$ultimates->save();

		$powers = new Comic;
		$powers->title = 'Powers';
		$powers->publisher = 'Marvel/Icon';
		$powers->save();

		$usom = new Comic;
		$usom->title = 'United States of Murder';
		$usom->publisher = 'Marvel/Icon';
		$usom->save();

		$mph = new Comic;
		$mph->title = 'MPH';
		$mph->publisher = 'Marvel/Icon';
		$mph->save();

		$allnewxmen = new Comic;
		$allnewxmen->title = 'All-New X-Men';
		$allnewxmen->publisher = 'Marvel';
		$allnewxmen->save();

		$amazingxmen = new Comic;
		$amazingxmen->title = 'Amazing X-Men';
		$amazingxmen->publisher = 'Marvel';
		$amazingxmen->save();

		$cyclops = new Comic;
		$cyclops->title = 'Cyclops';
		$cyclops->publisher = 'Marvel';
		$cyclops->save();

		$magneto = new Comic;
		$magneto->title = 'Magneto';
		$magneto->publisher = 'Marvel';
		$magneto->save();

		$nightcrawler = new Comic;
		$nightcrawler->title = 'Nightcrawler';
		$nightcrawler->publisher = 'Marvel';
		$nightcrawler->save();

		$xfactor = new Comic;
		$xfactor->title = 'All-New X-Factor';
		$xfactor->publisher = 'Marvel';
		$xfactor->save();

		$xforce = new Comic;
		$xforce->title = 'X-Force';
		$xforce->publisher = 'Marvel';
		$xforce->save();

		$uncanny = new Comic;
		$uncanny->title = 'Uncanny X-Men';
		$uncanny->publisher = 'Marvel';
		$uncanny->save();

		$xmen = new Comic;
		$xmen->title = 'X-Men';
		$xmen->publisher = 'Marvel';
		$xmen->save();


	}

}
