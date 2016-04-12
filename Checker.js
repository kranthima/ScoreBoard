jQuery(document).ready(function($) {

    var $fields = $("table :input").not(':button');
    $fields.keyup(function() {
        var $emptyFields = $fields.filter(function() {
            return $.trim(this.value) === "";
        });

        if (!$emptyFields.length) {
            $('#Submit').removeAttr('disabled');
        } else {
            $('#Submit').attr('disabled', 'disabled');
        }
    });

    $("#Submit").click(function(){
        $("#score_board").submit();
        var team1Name = $("#Team1Name_input").val();
        var team1Score = $("#Team1Score_input").val();
        var team2Name = $("#Team2Name_input").val();
        var team2Score = $("#Team2Score_input").val();
        var dataString = 'team1Name='+ team1Name + '&team1Score='+ team1Score + '&team2Name='+ team2Name + '&team2Score='+ team2Score;
        $(':input').not(':button').val('');
        $('#Submit').attr('disabled', 'disabled');
        $.ajax({
            type: "POST",
            url: "Checker.php",
            cache: false,
            data: dataString,
            success: function(data){
                var response = $.parseJSON(data);
                $("#success").html("<div class='Bold'>"+ response.Winner + "</div><div class='inline'> is the winner  with Score:</div>"
                    + "<div class ='Bold'>" + response.Score + "</div>");

            }
        });
    });

    $("#remove1Score").click(function(){
        $("#Team1Score_input").val('');
        $('#Submit').attr('disabled', 'disabled');
    });

    $("#remove2Score").click(function(){
        $("#Team2Score_input").val('');
        $('#Submit').attr('disabled', 'disabled');
    });

    jQuery('.numbersOnly').keyup(function () {
        this.value = this.value.replace(/[^0-9\.]/g,'');
        if(this.value === '')
            $('#Submit').attr('disabled', 'disabled');
    });

});
