<div class="row row-offcanvas row-offcanvas-left">

 <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
   
    <ul class="nav nav-sidebar">
      <li><a href="?page=settings">Settings</a></li>
      <li><a href="?page=upgrade">Upgrade</a></li>
      <li><a href="?page=configcheck">Config Check</a></li>
      <li class="active"><a href="?page=changelog">Changelog</a></li>
    </ul>
 </div><!--/span-->

 <div class="col-sm-9 col-md-10 main">
  
  <!--toggle sidebar button-->
  <p class="visible-xs">
    <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
  </p>
  
  <h1 class="page-header">
    Changelog
    <p class="lead">G-DASH changelog</p>
  </h1>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.22</b></div>
    <div class="panel-body">
		<ul>
			<li>Solved a bug where the "Not encrypted wallet" message kept appending to the error message.</li>
			<li>Added witness page (still empty for now).</li>
			<li>A 'find my Pi' function was added for users who ordered a pre-installed Pi.</li>
			<li>Fixed 2FA QR-code -was not working in Google Authenticator, but did work in Authy.</li>
		</ul>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.21</b></div>
    <div class="panel-body">
		<ul>
			<li>Added the raspbian repository to the auto-installer and installation guide.</li>
			<li>The wallet function returned the wrong error code for "Insufficient funds".</li>
			<li>Listtransactions in the push notifications returned only data from the default account.</li>
			<li>A push notification can be send when a new version of Gulden is available in the Raspbian repository.</li>
			<li>The big red error notification will automatically go away when Gulden is up and running.</li>
			<li>Fixed a bug in the auto-install script. RPC passwords can't contain a "#" sign.</li>
			<li>Added tooltips to the dashboard main screen.</li>
			<li>Multiple colors for the node section on the dashboard main screen (green, orange, red).</li>
			<li>A notification is shown when there is an update of Gulden available in the Raspbian repository.</li>
			<li>The check for required packages differentiates between PHP5 and PHP7.</li>
			<li>Showing the temperature of the Linux system next to the CPU and MEM percentages.</li>
		</ul>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.20</b></div>
    <div class="panel-body">
		<ul>
			<li>Disabled AJAX caching.</li>
			<li>Added a pushbullet notification: notify on new G-DASH update.</li>
			<li>Show the 2FA QR code even if OTP is not activated.</li>
			<li>Added information in the FAQ on how to import a recovery phrase manually (#8).</li>
			<li>Added information in the FAQ on how to monitor your Gulden installation (#9).</li>
			<li>Added a pushbullet notification: notify when receiving Gulden.</li>
			<li>Change the notification cronjob check time to every 2 minutes instead of 5.</li>
			<li>Corrected the password check in the configuration check page.</li>
		</ul>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.19</b></div>
    <div class="panel-body">
		<ul>
			<li>Oops... Forgot a bracket causing the Wallet page not loading.</li>
			<li>Added a loading message in the wallet transaction list.</li>
			<li>Disable 2FA when the user changed the password.</li>
			<li>Disable 2FA when login screen is disabled.</li>
		</ul>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.18</b></div>
    <div class="panel-body">
		<ul>
			<li>Even more secure login: You can now choose a seperate username and password just for G-DASH. No
				need to use the same username and password as for GuldenD (Gulden.conf) anymore.</li>
			<li>Squashed a bug in the transaction list.</li>
			<li>Typo in the updater.</li>
			<li>Added the protocol to the node settings (TCP).</li>
			<li>Added and edited FAQ items.</li>
			<li>Added port checker for node and witness to the Config Check page (hosted by guldennodes.com).</li>
		</ul>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.17</b></div>
    <div class="panel-body">
		<ul>
			<li>More secure login option: 2-Factor Authentication can be enabled from the settings page.</li>
			<li>Added FAQ to G-DASH.nl.</li>
			<li>Release notes are shown on the update page when an update is available.</li>
			<li>Send push messages to your phone, tablet, smartwatch and PC about the status of your G-DASH and Gulden 
				server using PushBullet. You will have to create an access token yourself which you can 
				get at <a href="https://www.pushbullet.com/#settings/account" target="_blank">your account page</a>.</li>
			<li>At this point the only push message is a check if the Gulden server is running. In the future 
				more options will be added like a push message for transactions or witness actions.</li>
			<li>A cron job will check for pushable updates every 5 minutes. Of course this won't work if your machine 
				is powered off or offline.</li>
		</ul>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.16</b></div>
    <div class="panel-body">
		<ul>
			<li>The transaction list looks nicer.</li>
			<li>Shortened the transaction ID.</li>
			<li>Changed the hover color when hovering over an active menu item.</li>
			<li>Changed the term "passphrase" to "password".</li>
			<li>Option to rename accounts.</li>
			<li>Added a FAQ to the "About" menu item.</li>
			<li>The auto install encrypts the wallet when starting for the first time.</li>
			<li>Euro price in wallet (using the guldentrader.com API).</li>
			<li>Separated JS and PHP scripts.</li>
			<li>Check if transaction input is a number (decimals as dots, not comma's).</li>
		</ul>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.15</b></div>
    <div class="panel-body">
		<ul>
			<li>Changed node statistics cron job from every 30 minutes to every 10 minutes.</li>
			<li>Generate QR code for the current address.</li>
			<li>Set wallet passphrase.</li>
			<li>See wallet "Recovery Phrase".</li>
			<li>If a wallet is not encrypted, it has to be encrypted before users can engage in any transactions or see the "Recovery Phrase".</li>
			<li>A lock indicates if a wallet is locked (green, closed) or unlocked (red, open).</li>
			<li>Show a new address after each transaction to the latest address (so address will not change if the address is not used yet).</li>
			<li>Create a new account in the wallet.</li>
			<li>Send Guldens to any Gulden address.</li>
			<li>Show last 50 transactions (will make it look nicer in the next version).</li>
			<li>Change the passphrase of the wallet.</li>
			<li>Import "Recovery Phrase" al set, but not activated at the moment as there is no easy way to run the rescan flag.</li>
		</ul>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading"><b>0.14</b></div>
    <div class="panel-body">
		<ul>
			<li>Checkbox to send node stats to guldennodes.com.</li>
			<li>Enabling this checkbox creates a cronjob for the www user to run twice per hour.</li>
			<li>Added a function to check which services are listening (makes it easier to troubleshoot).</li>
			<li>Added the changelog to the settings menu.</li>
		</ul>
    </div>
  </div>
  
  <div class="panel panel-default">
    <div class="panel-heading"><b>0.13</b></div>
    <div class="panel-body">
		<ul>
			<li>Created an empy "Witness" page.</li>
			<li>Added a function to get file permissions.</li>
			<li>Users have the option to update from beta/stable channel.</li>
			<li>Removed "Prerequisites check" from the settings page.</li>
			<li>Created a new page called "Config check".</li>
			<li>In the config check page users can troubleshoot their connection with G-DASH <-> Gulden.</li>
		</ul>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading"><b>0.12</b></div>
    <div class="panel-body">
		<ul>
			<li>Give the RCP address and port default values on install (127.0.0.1/9232).</li>
			<li>When the user has both IPv4 and IPv6 addresses, only show the IPv4 address.</li>
			<li>Added a repeated password field and a validator.</li>
			<li>Automatically log out the user when changing the password.</li>
			<li>Added info to the repeat password field.</li>
			<li>Changelog started</li>
		</ul>
    </div>
  </div>
  

  </div><!--/row-->
</div>
