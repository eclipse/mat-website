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

		<p>The minimum Java version required to run the stand-alone version of Memory Analyzer is Java 17.
		See <a href="https://wiki.eclipse.org/Eclipse/Installation#JRE.2FJDK_Sources">JRE/JDK Sources</a>.
		</p>
		
		<p>To use an older JDK it is still possible to install the Memory Analyzer plugins from the update site
		 into an existing (older) Eclipse installation.</p>

		<p>To install the Memory Analyzer <strong>into an Eclipse IDE</strong> use the update site URL provided below.
		
		<div class="homeitem3col">
			<h3><a id="1_15_0"></a>Memory Analyzer 1.15.0 Release</h3>
			<ul>
			    <li>
                    <b>Version</b>: 1.15.0.20231206 |  <b>Date</b>: 6 December 2023 2023  |  <b>Type</b>: Released
                    <ul>
                        <li>
                            <b>Update Site</b>: <a href="https://download.eclipse.org/mat/1.15.0/update-site/">https://download.eclipse.org/mat/1.15.0/update-site/</a>
                        </li>
                        <li>
                            <b>Archived Update Site</b>: <a href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/MemoryAnalyzer-1.15.0.202312061754.zip">MemoryAnalyzer-1.15.0.202312061754.zip</a>
                        </li>
                        <li>
		                    <b>Stand-alone Eclipse RCP Applications</b><br/>
		                    
		                    <a title="Windows (x86_64) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-win32.win32.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                     &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-win32.win32.x86_64.zip">Windows (x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/x86_64) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-macosx.cocoa.x86_64.dmg"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-macosx.cocoa.x86_64.dmg">Mac OSX (Mac/Cocoa/x86_64)</a><br/>
		                    <a title="Mac OSX (Mac/Cocoa/AArch64) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-macosx.cocoa.aarch64.dmg"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                               &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-macosx.cocoa.aarch64.dmg">Mac OSX (Mac/Cocoa/AArch64)</a><br/>
		                    <a title="Linux (x86_64/GTK+) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-linux.gtk.x86_64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-linux.gtk.x86_64.zip">Linux (x86_64/GTK+)</a><br/>
		                    <a title="Linux (AArch64/GTK+) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-linux.gtk.aarch64.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                        &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-linux.gtk.aarch64.zip">Linux (AArch64/GTK+)</a><br/>
		                    <a title="Linux (PPC64le/GTK+) RCP" href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-linux.gtk.ppc64le.zip"><img src="/mat/home/icon-save.gif" alt=""/></a>
		                                         &nbsp;&nbsp;<a href="https://www.eclipse.org/downloads/download.php?file=/mat/1.15.0/rcp/MemoryAnalyzer-1.15.0.20231206-linux.gtk.ppc64le.zip">Linux (PPC64le/GTK+)</a><br/>
		                </li>
		                <li>
		                    <b>New and Noteworthy</b>: <a href="1.15.0/noteworthy.html">noteworthy.html</a>
		                </li>
                    </ul>
                </li>
			</ul>
		</div>
		
		<div class="homeitem3col">
			<h3><a id="otherReleases"></a>Other Releases</h3>
            <ul>
                <li>
                    <a href="previousReleases.php">Previous Releases</a>
                </li>
                <li>
                    <a href="snapshotBuilds.php">Snapshot Builds</a>
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
