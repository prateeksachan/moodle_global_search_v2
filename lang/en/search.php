<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'search', language 'en', branch 'MOODLE_20_STABLE'
 *
 * @package   search
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['advancedsearch'] = 'Advanced search';
$string['all'] = 'All';
$string['author'] = 'Author';
$string['authorname'] = 'Author name';
$string['back'] = 'Back';
$string['beadmin'] = 'You need to be an admin user to use this page.';
$string['commenton'] = 'Comment on';
$string['createanindex'] = 'create an index';
$string['createdon'] = 'Created on';
$string['database'] = 'Database';
$string['databasestate'] = 'Indexing database state';
$string['datadirectory'] = 'Data directory';
$string['deletionsinindex'] = 'Deletions in index';
$string['doctype'] = 'Doctype';
$string['documents'] = 'documents';
$string['documentsfor'] = 'Documents for';
$string['documentsindatabase'] = 'Documents in database';
$string['documentsinindex'] = 'Documents in index';
$string['duration'] = 'Duration';
$string['emptydatabaseerror'] = 'Database table is not present, or contains no index records.';
$string['enteryoursearchquery'] = 'Enter your search query';
$string['errors'] = 'Errors';
$string['filesinindexdirectory'] = 'Files in index directory';
$string['globalsearchdisabled'] = 'Global searching is not enabled.';
$string['checkdb'] = 'Check database';
$string['checkdbadvice'] = 'Check your database for any problems.';
$string['checkdir'] = 'Check dir';
$string['checkdiradvice'] = 'Ensure the data directory exists and is writable.';
$string['invalidindexerror'] = 'Index directory either contains an invalid index, or nothing at all.';
$string['ittook'] = 'It took';
$string['next'] = 'Next';
$string['noindexmessage'] = 'Admin: There appears to be no search index. Please';
$string['normalsearch'] = 'Normal search';
$string['openedon'] = 'opened on';
$string['resultsreturnedfor'] = 'results returned for';
$string['runindexer'] = 'Run indexer (real)';
$string['runindexertest'] = 'Run indexer test';
$string['score'] = 'Score';
$string['search'] = 'Search';
$string['searching'] = 'Searching in ...';
$string['searchnotpermitted'] = 'You are not allowed to do a search';
$string['seconds'] = 'seconds';
$string['solutions'] = 'Solutions';
$string['statistics'] = 'Statistics';
$string['thesewordshelpimproverank'] = 'These words help improve rank';
$string['thesewordsmustappear'] = 'These words must appear';
$string['thesewordsmustnotappear'] = 'These words must not appear';
$string['title'] = 'Title';
$string['tofetchtheseresults'] = 'to fetch these results';
$string['totalsize'] = 'Total size';
$string['type'] = 'Type';
$string['uncompleteindexingerror'] = 'Indexing was not successfully completed, please restart it.';
$string['versiontoolow'] = 'Sorry, global search requires PHP 5.0.0 or later';
$string['whichmodulestosearch?'] = 'Which modules to search?';
$string['wordsintitle'] = 'Words in title';

/**
 * Strings for Global Search
 * To be merged later
*/

$string['advancequeries'] = 'More Advance Queries';
$string['authorfilterquery'] = 'From records having this author';
$string['delete'] = 'Delete';
$string['emptyqueryfield'] = 'Please enter a query to search';
$string['filterquery'] = 'Enter Filter Queries below. Insert a comma between multiple values.';
$string['filterqueryheader'] = 'Filter Query';
$string['globalsearch'] = 'Global Search';
$string['globalsearch_help'] = 'The following search features are available (examples of search terms and search results will appear in [ ] in list below – do not actually include the [ ] in your search):

* Search will automatically search for root words:<br>
    * Searching [appear] will automatically return results that contain the words [appear], [appearing], [appears], and [appeared]
* Search multiple terms using (“AND”, “OR”, “NOT”):
    * Searching [car AND wheel] will return all results that contain both of these terms
    * Searching [car NOT wheel] will return all results that contain car and do not contain wheel
    * Searching [car OR wheel] will return all results that contains either car or wheel
* Search using wildcards (“*” or “?”) to find results that are similar to the search term entered:
    * Searching [car*] will return all results that contain a word that starts with “car”, including results like [cars], [carwash], [caring], and [cardinal]
    * Searching [car?] will return all results that contain a word that starts with “car” followed by any other one character/letter, including results like [care], [cars], or [cart]
* Perform a proximity search using the “~” symbol:<br>
    * [Searching [“drive car” ~4] will return all results where the words” drive” and “car” appear within 4 words of each other, including results like [how to drive a car] or [Mary wanted to drive the red car]
* Boost a search term using the “^” operator: <br>
    * Searching [“blue car”^5 “yellow bus”] will make the phrase “blue car” more relevant, so results that contain that phrase one or more times will appear higher in the results list
';
$string['index'] = 'Index';
$string['modulefilterquery'] = 'From records belonging to this module';
$string['query'] = 'Enter a search term into the Search box, and click “Go!” to perform a global search of the site.';
$string['optimize'] = 'Optimize';
$string['titlefilterquery'] = 'From records having this title';
$string['filtertimesection'] = 'Limit search by time';
$string['searchfromtime'] = 'Include search results modified after';
$string['searchtilltime'] = 'Include search results modified before';
