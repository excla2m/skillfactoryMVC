<?php

class Model_Portfolio extends Model
{
	
	public function get_data()
	{	
		
		// Здесь мы просто сэмулируем реальные данные.
		
		return array(
			
			array(
				'Year' => '2021',
				'Site' => 'http://apple.com',
				'Description' => 'is an American multinational technology company that specializes in consumer electronics, computer software, and online services. Apple is the worlds largest technology company by revenue (totaling $327 billion in 2020) and, since January 2021, the worlds most valuable company.'
			),

			array(
				'Year' => '2021',
				'Site' => 'http://ktm.com',
				'Description' => 'KTM AG (formerly KTM Sportmotorcycle AG[4][5]) is an Austrian motorcycle and sports car manufacturer owned by Pierer Mobility AG and Indian manufacturer Bajaj Auto. It was formed in 1992 but traces its foundation to as early as 1934. Today, KTM AG is the parent company of the KTM Group, consisting of a number of motorcycle brands.'
			),

			array(
				'Year' => '2012',
				'Site' => 'http://GeekWear.ru',
				'Description' => 'Интернет-магазин брендовой одежды для гиков.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://РоналВарвар.рф',
				'Description' => 'Промо-сайт мультфильма "Ронал-варвар" от норвежских режиссеров. Мультфильм о самом нетипичном варваре на Земле, переполненный интересными приключениями и забавными ситуациями.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://TompsonTatoo.ru',
				'Description' => 'Персональный сайт-блог художника-татуировщика Алексея Томпсона из Санкт-Петербурга.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://DaftState.ru',
				'Description' => 'Страничка музыкальных и сануд продюсеров из команды "DaftState", работающих в стилях BreakBeat и BigBeat.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://TiltPeople.ru',
				'Description' => 'Сайт сообщества фотографов в стиле Tilt Shif.'
			),

			array(
				'Year' => '2011',
				'Site' => 'http://AbsurdGames.ru',
				'Description' => 'Страничка российской команды разработчиков независимых игр с необычной физикой и сюрреалистической графикой.'
			),

		);
	}

}
