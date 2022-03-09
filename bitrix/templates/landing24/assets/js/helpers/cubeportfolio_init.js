;(function() {
	"use strict";

	BX.addCustomEvent("BX.Landing.Block:init", function(event) {
		var selector = event.makeRelativeSelector(".cbp");

		if($(selector).length > 0)
		{
			$.HSCore.components.HSCubeportfolio.init('.cbp');
		}
	});


	BX.addCustomEvent("BX.Landing.Block:Node:update", function(event) {
		var selector = event.makeRelativeSelector(".cbp");

		if($(selector).length > 0)
		{
			$.HSCore.components.HSCubeportfolio.init('.cbp');
		}
	});

})();