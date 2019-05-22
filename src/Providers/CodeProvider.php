<?php

namespace Egofoxlab\Util\Providers;

/**
 * `CodeProvider` Provide custom errors
 *
 * `99` - prefix
 * `01` - category
 * `32` - error code
 *
 * 990132 - code error
 */

class CodeProvider {

	//region Http
	/**
	 * 500 Internal Server Error
	 */
	const HTTP_INTERNAL_SERVER_ERROR = 500;

	/**
	 * 200 OK
	 */
	const HTTP_OK = 200;
	//endregion

	//region Data
	/**
	 * Invalid data
	 */
	const E_DATA_INVALID = 990001;

	/**
	 * Invalid version
	 */
	const E_DATA_INVALID_VERSION = 990002;
	//endregion

	//region Settings 01
	const E_SETTINGS_UPDATE = 990100;
	//endregion

	//region Reviews 02
	const E_REVIEWS_ADD = 990200;
	//endregion

}
