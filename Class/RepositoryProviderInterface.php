<?php

// Declare the interface 'RepositoryProvider'
interface RepositoryProvider {

    public function get_content($name);
    public function get_resource_url($name);
}
?>