<?php
require "/usr/local/HelloSlim/Class/RepositoryProviderInterface.php";
require "/usr/local/HelloSlim/Models/RepositoryResultModel.php";
require "/usr/local/HelloSlim/Models/RepositoryUrlModel.php";

class GitHubProvider implements RepositoryProvider{

    /**
    * @return RepositoryProviderModel
    */
    public function get_content($name){
        $url = $this->get_resource_url($name);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.3; rv:36.0) Gecko/20100101 Firefox/36.0");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($ch);
        curl_close($ch);

        // return a model of the returned result
        $decoded = json_decode($response);
        try{
            $models = array_map(array($this, "mapModel"), $decoded->items);
        } catch (Exception $e){
            $models = array([]);
        }
        return $models;
    }

    /**
    * @return RepositoryUrlModel->get_url()
    */
    public function get_resource_url($name){
        // resource address
        $url="https://api.github.com/search/repositories?q=$name";
        // pop it in a model
        $url_model = new RepositoryUrlModel($url);

        //only want to see the url value in the return
        return $url_model->get_url();
    }

    private function mapModel($searchResult){
        return new RepositoryResultModel(
            $searchResult->name,
            $searchResult->description,
            $searchResult->forks,
            $searchResult->html_url
        );
    }
}
?>