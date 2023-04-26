<?php
namespace mutall\capture;
//
//Resolve references to the schema library
include '../../../schema/v/code/schema.php';
//
//Resolve reference to the questionnaire class using teh schema library
include '../../../schema/v/code/questionnaire.php';
//
//Define a new questionnaire for uploading data to the mutall_chama database
$q = new \mutall\questionnaire('mutall_chama');
//
//Simple loading
echo $q->load_common([
    ['kkm', 'chama', 'name'],
    ['Kiama Kia Ma Cultural Group', 'chama', 'title']
]);
//
echo '<br/>'; //_______________________________________________________________________
//
//1. Define the layouts for the rest of the chamas using the using a tabular 
//layout
//
//1.2 Define the data matrix, as an array of an array
$matrix = [
    ['diasp', 'Diaspara Family', 500],
    ['elite', 'Elite Group of Friends', 1000],
    ['friends', 'Friends of Ngong Hills Conservancy Group', null]
];    
//
//1.2 Define the loading map as layouts
$chama_layouts = [
    //
    //The data source as a matrix layout
    new matrix('a', ['x', 'y', 'z'], $matrix),
    //
    //The data destinations as label layouts
    [new lookup('a', 'x'), 'chama', 'name'],
    [new lookup('a', 'y'), 'chama', 'title'],
    [new lookup('a', 'z'), 'chama', 'rate']
];
//
//1.3 Load the layouts using the most common method
echo $q->load_common($chama_layouts);
//
//
echo '<br/>';//_____________________________________________________________________________________
///
//2. Load the events data from Excel through a a csv file
//
//2.1 Define the event data layouts
$event_layouts = [
    //
    //2.1.1 Define the csv tabular layout as the source of the data
    new csv(
        //
        //The name of the text table    
        'events',
        //
        //The filename that holds the (milk) data    
        'd:/mutall_projects/chama/v/data/Diaspora events.csv',
        //
        //The header colmumn names. If empty, it means the user wishes 
        //to use the default values
        [],
        //
        //Text used as the value separator
        ",",
        //
        //The row number, starting from 0, where column names are stored
        //A negative number means that file has no header     
        0,
        //
        //The row number, starting from 0, where the table's body starts.        
        1
    ),
    //
    //2.1.2. Use lookup expressions to define the destination layouts as labels
    [new lookup('events', 'event_name'), 'event', 'name'],
    [new lookup('events', 'user_name'), 'user', 'name'],
    [new lookup('events', 'event_date'), 'event', 'date'],
    [new lookup('events', 'event_title'), 'event', 'title'],
    //
    //
    //2.1.2 These data is important but not provided in the table
    ['diasp', 'chama', 'name'],
    [null, 'membership', 'membership'],
    [null, 'beneficiary', 'beneficiary'],
    
];
//
//2.2. Use the layouts to load the data to the database
$result = $q->load_common($layouts);
//
//2.3 Check the results
echo $result;
//______________________________________________________________________________________
//
//Create the csv table
$contrib = new csv(
        //
        //The name of the text table    
        'contrib',
        //
        //The filename that holds the (milk) data    
        'd:/mutall_projects/chama/v/data/Diaspora Welfare Group-Rev.3.csv',
        //
        //The header colmumn names. If empty, it means the user wishes 
        //to use the default values
        [],
        //
        //Text used as the value separator
        ",",
        //
        //The row number, starting from 0, where column names are stored
        //A negative number means that file has no header     
        -1,
        //
        //The row number, starting from 0, where the table's body starts.        
        1
);


$layouts3 = [
    $contrib,
    ['diasp', 'chama', 'name'],
    [new lookup('contrib', 0), 'membership', 'num'],
    [new lookup('contrib', 1), 'user', 'name'],
    
    [new lookup('contrib', 2), 'contribution', 'amount', [1]],
    [null, 'contributor', 'contributor', [1]],
    ['msafiri', 'event', 'name', [1]],
    
    [new lookup('contrib', 3), 'contribution', 'amount', [2]],
    ['kiguru', 'event', 'name', [2]],
    [null, 'contributor', 'contributor', [2]],
    
    [new lookup('contrib', 4), 'contribution', 'amount', [3]],
    ['njoge', 'event', 'name', [3]],
    [null, 'contributor', 'contributor', [3]],
    
    [new lookup('contrib', 5), 'contribution', 'amount', [4]],
    ['lucy', 'event', 'name', [4]],
    [null, 'contributor', 'contributor', [4]],
    
    [new lookup('contrib', 6), 'contribution', 'amount', [5]],
    ['kibunyi', 'event', 'name', [5]],
    [null, 'contributor', 'contributor', [5]],
  
    [new lookup('contrib', 7), 'contribution', 'amount', [6]],
    ['waiyaki', 'event', 'name', [6]],
    [null, 'contributor', 'contributor', [6]],
    
    [new lookup('contrib', 8), 'contribution', 'amount', [7]],
    ['wanjohi', 'event', 'name', [7]],
    [null, 'contributor', 'contributor', [7]],
    
    [new lookup('contrib', 9), 'contribution', 'amount', [8]],
    ['mwega', 'event', 'name', [8]],
    [null, 'contributor', 'contributor', [8]],
    
    [new lookup('contrib', 10), 'contribution', 'amount', [9]],
    ['githae', 'event', 'name', [9]],
    [null, 'contributor', 'contributor', [9]],
    
    [new lookup('contrib', 11), 'contribution', 'amount', [10]],
    ['safiri', 'event', 'name', [10]],
    [null, 'contributor', 'contributor', [10]],
    
    [new lookup('contrib', 12), 'contribution', 'amount', [11]],
    ['kagwi', 'event', 'name', [11]],
    [null, 'contributor', 'contributor', [11]],
    
    [new lookup('contrib', 13), 'contribution', 'amount', [12]],
    ['ndungu', 'event', 'name', [12]],
    [null, 'contributor', 'contributor', [12]],
];
//________________________________________________________________________________
function events(...$args){
    for($i=2; $i<count($args)+2; $i++) {
        yield [new lookup('contrib', $i), 'contribution', 'amount', [$i]];
        yield [null, 'contributor', 'contributor', [$i]];
        yield ['msafiri', 'event', 'name', [$i]];
    }    
}

$layouts4 = [
    $contrib,
    ['diasp', 'chama', 'name'],
    [new lookup('contrib', 0), 'membership', 'num'],
    [new lookup('contrib', 1), 'user', 'name'],
    ...events('msafiri', 'kiguru', 'njoge','lucy', 'kibunyi', 'waiyaki', 
        'wanjohi', 'mwega', 'githae', 'safiri', 'kagwi', 'ndungu')
];


