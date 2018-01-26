function addToCart(cartItem)
        {
            var httpRequest = new XMLHttpRequest();
            httpRequest.onreadystatechange = function () 
            {
                if (this.readyState == 4 && this.status == 200)
                {
                    var items = <?php echo($_SESSION['cartItem']); ?>
                }
                else if (this.readyState == 4) 
                {
                    alert("Failure trying to open file to write. Status is: " + this.statusText);
                }
            };
                
            httpRequest.open("POST","addToCart.php?cartItem=" + cartItem, true);
            httpRequest.send();
        }