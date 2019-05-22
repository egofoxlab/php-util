<?php

namespace Egofoxlab\Util\Providers;

class StringProvider {

	/**
	 * Convert query to words
	 *
	 * @param string $string
	 * @return array
	 */
	public function toWords($string) {
		$words = explode(' ', $string);

		foreach ($words as $key => $word) {
			$words[$key] = trim($word);
		}

		return $words;
	}

	/**
	 * Remove forbidden words
	 *
	 * @param array $words - Initial words array
	 * @param array $forbiddenWords - Words that must be exclude from initial words array
	 * @return array - Filtered words array
	 */
	public function removeForbiddenWords($words, array $forbiddenWords) {
		if (is_array($words)) {
			return $this->removeForbiddenWordsArr($words, $forbiddenWords);
		} elseif (is_string($words)) {
			return $this->removeForbiddenWordsStr($words, $forbiddenWords);
		}

		return null;
	}

	/**
	 * Remove forbidden words
	 *
	 * @param array $words - Initial words array
	 * @param array $forbiddenWords - Words that must be exclude from initial words array
	 * @return array - Filtered words array
	 */
	private function removeForbiddenWordsArr(array $words, array $forbiddenWords) {
		$newWords = [];

		foreach ($words as $word) {
			//  Skip forbidden words
			if (in_array($word, $forbiddenWords)) {
				continue;
			}

			$newWords[] = $word;
		}

		return $newWords;
	}

	/**
	 * Remove forbidden words for string e.g.
	 * "Wow, tell me about the idea, please!" =>
	 * "Wow, tell me about  idea, please!"
	 *
	 * IMPORTANT! Note that function remove only word and don't remove spaces that surround it.
	 *
	 * @param $string
	 * @param array $forbiddenWords
	 * @return string|string[]|null
	 */
	private function removeForbiddenWordsStr($string, array $forbiddenWords) {
		foreach ($forbiddenWords as $forbiddenWord) {
			$_string = preg_replace("/\b{$forbiddenWord}\b/mis", '', $string);

			if ($_string !== null) {
				$string = $_string;
			}
		}

		return $string;
	}

}
