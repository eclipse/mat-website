<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer Download Page
	#****************************************************************************
	
	$pageTitle 		= "Eclipse Memory Analyzer Open Source Project";
	$pageKeywords	= "Memory Analyzer Download";
	$pageAuthor		= "Andreas Buchen";
	
	$html = <<<EOHTML

	<div id="midcolumn">
		<p>Download the Memory Analyzer as <strong>feature</strong> using the Update Manager: One feature contains the
		heap analysis and reports, and the other contains pie charts.
		The latter requires the <a href="/birt">BIRT Chart Engine</a>.</p>
		
		<p>The <strong>stand-alone</strong> version is based on Eclipse RCP. It is useful if you do not want to install
		a full-fledged IDE on the system you are running the heap analysis.</p>

		<div class="homeitem3col">	
			<h3>Latest Version 0.7 (Incubation)</h3>
            <ul>
                <li>
                    <b>Version</b>: 0.7.0.20080416  |  <b>Date</b>: 16 April 2008  |  <b>Type</b>: Nightly Build
                </li>
                <li>
                    <b>Update Site</b>: <a href="http://download.eclipse.org/technology/mat/0.7/update-site/">http://download.eclipse.org/technology/mat/0.7/update-site/</a>
                    (4,2 MB)</li>                
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>
                    
                    <a title="Win32 RCP" href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20080416-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/technology/mat/0.7/rcp/MemoryAnalyzer-Incubation-0.7.0.20080416-win32.win32.x86.zip">Windows (x86) (34,7 MB)</a><br/>
                    Ask us for more platforms, if you are interested! 
                </li>                                
            </ul>
		</div>		
			
	</div>

	<div id="rightcolumn">
        $sidebar		
	</div>

EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>