<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer Download Page
	#****************************************************************************

	$pageTitle 		= "Eclipse Memory Analyzer Open Source Project";
	$pageKeywords	= "Memory Analyzer Download Snapshots";
	$pageAuthor		= "Krum Tsvetkov";

	$html = <<<EOHTML

	<div id="midcolumn">
		<p>This page points to snapshots / preview versions of Memory Analyzer which haven't been released.</p>

		<div class="homeitem3col">
			<h3 id="nightly">Memory Analyzer Latest Stable Build</h3>
            <ul>
               <li>
                    <b>Version</b>: Latest Development Build |  <b>Type</b>: Development/Nightly Build
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="http://download.eclipse.org/mat/snapshots/update-site/">http://download.eclipse.org/mat/snapshots/update-site/</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP</b><br/>
		
		                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-win32.win32.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                            &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-win32.win32.x86.zip">Windows (x86) (68.5 MB)</a><br/>
		                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-win32.win32.x86_64.zip">Windows (x86_64) (68.6 MB)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-macosx.cocoa.x86_64.dmg"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-macosx.cocoa.x86_64.dmg">Mac OSX (Mac/Cocoa x86_64) (67.8 MB)</a><br/>
		                    <a title="Linux (x86/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.x86.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.x86.zip">Linux (x86/GTK+) (68.0 MB)</a><br/>
		                    <a title="Linux (x86_64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.x86_64.zip">Linux (x86_64/GTK+) (68.1 MB)</a><br/>
		                    <a title="Linux (PPC64/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.ppc64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                       &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.ppc64.zip">Linux (PPC64/GTK+) (68.1 MB)</a><br/>
		                    <a title="Linux (PPC64LE/GTK+) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.ppc64le.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/snapshots/rcp/org.eclipse.mat.ui.rcp.MemoryAnalyzer-linux.gtk.ppc64le.zip">Linux (PPC64LE/GTK+) (68.0 MB)</a><br/>
		                </li>
                    </ul>
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
