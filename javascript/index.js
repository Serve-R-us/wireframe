// defauly load page
$(document).ready(function() {
    $('#content').load('views/main.php');
    
    $('#content').on('click', 'a', function() {
            var page = $(this).attr('href');
            //alert(page);
            $('#content').load('views/' + page + '.php');
            return false;
    });

}); 


$('a').click(function() {
        var page = $(this).attr('href');
        //alert(page);
        $('#content').load('views/' + page + '.php');
        return false;
});
