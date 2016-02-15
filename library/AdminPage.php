<?php
class AdminPage extends AbstractPage {
    public function render() {
        echo <<<HTM
        <!DOCTYPE html>
        <html>
            $this->_head
        <body>
                <h1>$this->_siteName</h1>
                <h2>Admin</h2>
                <div>
                    $this->_content;
   </div>
        </body>
        </html>
        
        
HTM;
    }
}
