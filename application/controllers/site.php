<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index(){
		$this->load->helper('url');
		$this->load->view('index');
	}
	public function parser(){
		# Use the Curl extension to query Google and get back a page of results
/*$url = "http://www.halamadrid.ge/";
$ch = curl_init();
$timeout = 5;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$html = curl_exec($ch);
curl_close($ch);

# Create a DOM parser object
$dom = new DOMDocument();

# Parse the HTML from Google.
# The @ before the method call suppresses any warnings that
# loadHTML might throw because of invalid HTML in the page.
@$dom->loadHTML($html);

# Iterate over all the <a> tags
foreach($dom->getElementsByTagName('a') as $link) {
        # Show the <a href>
       // echo $link->getAttribute('href');
       // echo "<br />";
}
*/

include 'simple_html_dom.php';

// Create DOM from URL or file
$html = file_get_html('http://www.halamadrid.ge/');

/*// Find all images 
foreach($html->find('img') as $element) 
       echo $element->src . '<br>'; */

$link_arr= array();
$count_link= 0;
$i=0;
foreach($html->find('div.full-link') as $a){
  echo $a->outertext . '<br>';
  $count_link++;
  $link_arr[$i]= $a->outertext; // adding result to array - working!
  $i++;

}
echo $count_link . '<br />' . $link_arr[1];



	}
}
