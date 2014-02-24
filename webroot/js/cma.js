$(document).ready(function() {
	$.each($('.table-filter'), function(k, v) {
		var $this = $(v),
			target = $this.data('target');
			console.log($this);
		
		$('#' + $this.attr('id')).on('change keyup paste', function(e) {
			$('#' + target + ' .tables li:not(:contains(' + $this.val() + '))').hide();
			$('#' + target + ' .tables li:contains(' + $this.val() + ')').show();
		})
	});
});