<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# Memory Analyzer Download Page
	#****************************************************************************

	$pageTitle 		= "Eclipse Memory Analyzer Open Source Project";
	$pageKeywords	= "Memory Analyzer Download";
	$pageAuthor		= "Andreas Buchen";

	$html = <<<EOHTML

	<div id="midcolumn">
		<p>The <strong>stand-alone</strong> Memory Analyzer is based on Eclipse RCP. It is useful if you do not want to install
		a full-fledged IDE on the system you are running the heap analysis.</p>
		
		To <p>install the Memory Analyzer <strong>into an Eclipse IDE</strong> use the Update Manager and the update site URL provided below.
		The <em>Memory Analyzer (Chart)</em> feature is optional. The chart feature requires the
		<a href="/birt">BIRT Chart Engine</a> (Version 2.2.2 or greater, available via Update Manager).</p>

		<div class="homeitem3col">
			<h3><a name="1_0_1"></a>Memory Analyzer 1.0.1 Release</h3>
            <ul>
                <li>
                    <b>Version</b>: 1.0.1.20100809  |  <b>Date</b>: 09 August 2010  |  <b>Type</b>: Released
                </li>
                <li>
                    <b>Update Site</b>: <a href="http://download.eclipse.org/mat/1.0/update-site/">http://download.eclipse.org/mat/1.0/update-site/</a>
                    (12,0 MB)
                </li>
                <li>
                    <b>Archived Update Site</b>: <a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/MemoryAnalyzer-1.0.1.201008091353.zip">MemoryAnalyzer-1.0.1.201008091353.zip</a>
                    (11,8 MB)
                </li>
                                   
                <li>
                    <b>Stand-alone Eclipse RCP</b><br/>

                    <a title="Windows RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-win32.win32.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-win32.win32.x86.zip">Windows (x86) (42,1 MB)</a><br/>
                    <a title="Windows (x86_64) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-win32.win32.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-win32.win32.x86_64.zip">Windows (x86_64) (42,1 MB)</a><br/>
                    <a title="Mac OSX (Mac/Carbon) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.carbon.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.carbon.x86.zip">Mac OSX (Mac/Carbon) (41,8 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.cocoa.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.cocoa.x86.zip">Mac OSX (Mac/Cocoa x86) (31,8 MB)</a><br/>
                    <a title="Mac OSX (Mac/Cocoa) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.cocoa.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-macosx.cocoa.x86_64.zip">Mac OSX (Mac/Cocoa x86_64) (41,9 MB)</a><br/>
                    <a title="Linux (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.x86.zip">Linux (x86/GTK 2) (42,1 MB)</a><br/>
                    <a title="Linux (x86_64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.x86_64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.x86_64.zip">Linux (x86_64/GTK 2) (42,2 MB)</a><br/>
                    <a title="Linux (PPC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.ppc.zip">Linux (PPC/GTK 2) (42,1 MB)</a><br/>
                    <a title="Linux (PPC64/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.ppc64.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-linux.gtk.ppc64.zip">Linux (PPC64/GTK 2) (39,9 MB)</a><br/>
                    <a title="Solaris 8 (x86/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-solaris.gtk.x86.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-solaris.gtk.x86.zip">Solaris 8 (x86/GTK 2) (40,0 MB)</a><br/>
                    <a title="Solaris 8 (SPARC/GTK 2) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-solaris.gtk.sparc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-solaris.gtk.sparc.zip">Solaris 8 (SPARC/GTK 2) (41,7 MB)</a><br/>
                    <a title="HP-UX (IA64_32/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-hpux.motif.ia64_32.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-hpux.motif.ia64_32.zip">HP-UX (IA64_32/Motif) (41,6 MB)</a><br/>
                    <a title="AIX (PPC/Motif) RCP" href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-aix.motif.ppc.zip"><img border=0 src="/mat/home/icon-save.gif"></a>
                    &nbsp;&nbsp;<a href="http://www.eclipse.org/downloads/download.php?file=/mat/1.0.1/rcp/MemoryAnalyzer-1.0.1.20100809-aix.motif.ppc.zip">AIX (PPC/Motif) (41,7 MB)</a><br/>
                </li>
            </ul>
		</div> 

		<div class="homeitem3col">
			<h3><a name="previousReleases"></a>Previous Releases</h3>
            <ul>
                <li>
                    <a href="previousReleases.php">Previous Releases</a>
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
