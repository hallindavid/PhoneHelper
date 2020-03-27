<?php
	
	namespace Hallindavid\PhoneHelper;
	use Illuminate\Support\Facades\Facade;

	class PhoneHelperFacade extends Facade {

		protected static function getFacadeAccessor()
		{
		    return 'phonehelper';
		}		
	}

?>