 $(document).ready(function() {
                $("#HiddenRowsNotice").html("<a href='#'>Family Membership</a>");
                $("#ShowHide").html("Family Membership</a>");
                $("#HiddenRows").hide();

                $('#ShowHide,#HiddenRowsNotice').click( function() {
                    $('#HiddenRows').toggle();  
                        $('#HiddenRowsNotice').toggle();
                });
            });