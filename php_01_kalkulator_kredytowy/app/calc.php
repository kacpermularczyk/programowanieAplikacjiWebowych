<?php
// KONTROLER strony kalkulatora
require_once dirname(__FILE__).'/../config.php';

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

// 1. pobranie parametrów

$amount = $_REQUEST ['amount'];
$years = $_REQUEST ['years'];
$interestRate = $_REQUEST ['interestRate'];

// 2. walidacja parametrów z przygotowaniem zmiennych dla widoku

// sprawdzenie, czy parametry zostały przekazane
if ( ! (isset($amount) && isset($years) && isset($interestRate)))
{
	//sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

// sprawdzenie, czy potrzebne wartości zostały przekazane
if ($amount == "")
{
	$messages [] = '!Nie podano kwoty kredytu!';
}
if ($years == "")
{
	$messages [] = '!Nie podano na ile lat!';
}
if ($interestRate == "")
{
	$messages [] = '!Nie podano oprocentowania!';
}

//nie ma sensu walidować dalej gdy brak parametrów
if (empty($messages))
{
	
	// sprawdzenie, czy $x i $y są liczbami całkowitymi
	if (! is_numeric( $amount ))
	{
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $years ))
	{
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
	
	if (! is_numeric( $interestRate ))
	{
		$messages [] = 'Trzecia wartość nie jest liczbą całkowitą';
	}	
}

// 3. wykonaj zadanie jeśli wszystko w porządku

if (empty ( $messages )) // gdy brak błędów
{ 
	
	//konwersja parametrów na int
	$amount = intval($amount);
	$years = intval($years);
	$interestRate = intval($interestRate);
	
	//wykonanie operacji
	
	$interest = $amount * $years * $interestRate * 0.01;
	$semiResult = $amount + $interest;
	$months = $years * 12;
	$result = number_format(($semiResult/$months),2, ',', ''); // 1 - wartosc, 2 - po przecinku, 3 - separator dziesiatek 4 - sep. tysiecy
}

// 4. Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$x,$y,$operation,$result)
//   będą dostępne w dołączonym skrypcie
include 'calc_view.php';