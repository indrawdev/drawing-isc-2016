<?php

/*
 * Demo widget
 */
class Navigation extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {
            $data['items'] = array('GELORA TRISULA SEMESTA', 'Indonesia Soccer Championship 2016');
        }

        $this->view('widgets/navigation', $data);
    }
    
}