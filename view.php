<?php

function render_all($res) {

echo "Listes :</br>" ;


while  ($row=$res->fetch()) {
	print_r($row);
echo"<br/>";
}

}
