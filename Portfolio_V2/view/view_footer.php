<?php

function callFooter()
{

?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="../js/typed.min.js" type="text/javascript"></script>
    <script src="../js/script.js" type="text/javascript">
        const currentLocation = location.href;
        const menuItem = document.querySelectorAll('a');
        const menuLength = menuItem.length
        for (let i = 0; i < menuLength; i++) {
            if (menuItem[i].href === currentLocation) {
                menuItem[i].className = "active"
            }
        }
    </script>
    </body>

    </html>

<?php } ?>