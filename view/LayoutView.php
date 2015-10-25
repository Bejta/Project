<?php

namespace view;

class LayoutView{

	public function render($nv,$v){
		echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <title>Rating calculator</title>
        </head>
        <body>
          <h1>Elo Calculator</h1>
          ' . $nv->show() . '
          
          <div class="container">
              ' . $v->response() . '
          </div>
         </body>
      </html>
    ';
	}
}