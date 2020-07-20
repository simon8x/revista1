<?php
//NOTE - function.php expects it to be inside an api folder. 
//I'm returning the post title inside of a link. Do it however you wish and adjust accordingly
//in the typeahead.js file
function get_companies(WP_REST_Request $request)
{
    $companies = query_posts( array(
        "post_type" => "pruebas",
        "s"         => $request['q']
    ) );
    $companies_names = [];
    foreach( $companies as $company )
    {
        $permalink    = get_post_permalink($company->ID);
        $name         = "<a class='company-link' href=$permalink>$company->post_title</a>";
        array_push($companies_names, $name);
    }
    return $companies_names;
}
?>