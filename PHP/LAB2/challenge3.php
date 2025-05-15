<?php
//Challenge 3" Job Listings Array
echo '<h3>Job Listings</h3>';

$listings = [
    ['id' => '1', 'job_title' => 'PHP Developer', 'company' => 'IBM', 'email' => 'john@ibm.com', 'contact_no' => '09168457456', 'skills' => ['PHP', 'MySQL', 'JavaScript']],
    ['id' => '2', 'job_title' => 'Web Designer', 'company' => 'AWS', 'email' => 'jane@aws.com', 'contact_no' => '09175597456', 'skills' => ['Photoshop', 'Illustrator', 'CSS']],
    ['id' => '3', 'job_title' => 'Network Admin', 'company' => 'CISCO', 'email' => 'James@cisco.com', 'contact_no' => '09202224576', 'skills' => ['Database', 'CyberSecurity', 'Networking']]
];

$new = ['id' => '4', 'job_title' => 'Graphic Artist', 'company' => 'ADOBE', 'email' => 'princess@adobe.com', 'contact_no' => '09208456544', 'skills' => ['Photoshop', 'Bootstrap', 'Flutter']];
array_push($listings, $new);

echo '<pre>';
print_r($listings);
echo '</pre>';

echo '<pre>';
$output = $listings[1]['job_title']. ' ' . $listings[1]['company']. ' ' . $listings[1]['email'];
echo $output;
echo '</pre>';

echo '<pre>';
$output = $listings[2]['skills'][0] .' '. $listings[2]['skills'][2];
echo $output;
echo '</pre>';