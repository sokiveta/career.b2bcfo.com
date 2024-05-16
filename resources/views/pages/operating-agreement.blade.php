@extends('components.layout')

@section('content')

<h2>Operating Agreement</h2>

<?php 
// session_start();
// isset($_SESSION['username']) || 

if (isset($_POST['login_pw']) && isset($_POST['purl_un'])) {

	// $purl_username = addslashes($_SESSION['username']);
	// $purl_password = addslashes($_SESSION['password']);

	$purl_username = addslashes($_POST['purl_un']);
	$purl_password = addslashes($_POST['login_pw']);

	$db = null;
	$config['db_hostname']	= '208.97.137.210'; // ds12437.dreamservers.com
	$config['db_username']	= 'peoplepurluser';
	$config['db_password']	= '58!gD@tAd@nG3r0u';
	$config['db_name']		= 'purlpeopledb';
	$config['db_port']		= '3306';
	$db = mysqli_connect($config['db_hostname'], $config['db_username'], $config['db_password'], $config['db_name'],$config['db_port']) or die('Error connecting to MySQL server.');
	if($db->connect_errno > 0){
		die('Unable to connect to database [' . $db->connect_error . ']');
	}

	$query = "SELECT fullname, email FROM purlpeople WHERE username='".$purl_username."' AND password='".$purl_password."'";
	$result = mysqli_query($db, $query);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			$purl_fullname = $row["fullname"];
			$purl_email = $row["email"];
		}
		// Display OA 
		?>
		<style>
		h2 { text-align: center; }
		h3 { text-align: center; }
		h4 { font: bold 20px sans-serif; text-decoration: underline; margin: 30px 0px 0px 0px; }
		h5 { font: bold 18px sans-serif; font-style: italic; margin: 30px 0px 0px 0px; }
		table, th, tr, td { border: 1px solid black; }
		th { background-color: #000000; color: #FFFFFF; text-align: center; }
		td, th { padding: 3px; }
		.row_number { text-align: right; font-weight: bold; }
		.row_right { text-align: right; }
		.indent_left { margin-left: 30px; }
		hr { border-top: 3px solid #888888; }
		</style>

		<div class="row">
			<div class="col-md-12">
			

				<!-- <p>Click below to sign electronically.<br />
				<br />
				Both the B2B CFO Operating Agreement and Supplement to Membership Application are included in the eSignature process.</p>
				<p><a href="https://secure.na1.adobesign.com/public/esignWidget?wid=CBFCIBAA3AAABLblqZhDbfr64ZB_O9WK9-ibGo7CMjh0tm1-vcnnxa--DkKWIc2knPfkQF0psLrsWmvBkybU*" class="btn btn-success btn-b2bcfo mB24" target="_blank">Operating Agreement (eSignature)</a></p>  
				-->
<!-- 
				<p>If you prefer to manually sign our Operating Agreement,<br />
				then please print the Operating Agreement and the<br />
				Supplement to Member Application (links below).<br />
				Put your info and signature on page 37 of the Operating<br />
				Agreement, and on the bottom of the Supplement<br />
				to Member Application, then FedEx those documents to us.<br />
				<br />
				Use <strong>FedEx #: 1920-1707-6</strong></p> -->

				<h3 style='margin-top: 60px;'>Please review the Operating Agreement for B2B CFO Partners, LLC (the "Operating Agreement").</h3>


				<p style='text-align: center;'><a href="/pdfs/B2B CFO Operating Agreement 2024-04-22.pdf" class="btn btn-success btn-b2bcfo mL10 mB24" target="_blank" style='font: 30px sans-serif;'>B2B CFO Operating Agreement</a>
				<!-- <br />
				<a href="/pdfs/B2B CFO Supplement to Member Application - Disclosure of Information 2022-03-01.pdf" class="btn btn-success btn-b2bcfo mL10 mB24" target="_blank">Supplement to Membership Application (PDF)</a><br />
				<a href="/pdfs/B2B CFO IP Use Agreement 2023-07-05.pdf" class="btn btn-success btn-b2bcfo mL10 mB24" target="_blank">IP Use Agreement (PDF)</a><br />
				<a href="/pdfs/B2B CFO Supplement - B2B EXIT requirements 2023-08-07.pdf" class="btn btn-success btn-b2bcfo mL10 mB24" target="_blank">B2B EXIT Requirements (PDF)</a> --></p>
				<p style="text-align: center;"><a href="/pdfs/B2B CFO Operating Agreement 2024-04-22.pdf" target="_blank"><img src="/images/pdf-icon.jpg" /> B2B CFO Operating Agreement</a></p>
<br /><br /><br />
				<p><strong>If you have questions, please contact Josh</strong><br />
				480-397-0593<br />
				<a href="mailto:joshhill@b2bcfo.com">joshhill@b2bcfo.com</a></p>

<br /><br /><br />

				<hr />
								
<br /><br /><br />

				<h3>Operating Agreement Summary</h3>
				<p style="text-align: center;"><a href="/pdfs/B2B CFO Summary of Operating Agreement 2022-03-01.pdf" target="_blank"><img src="/images/pdf-icon.jpg" /> Summary of Operating Agreement.pdf</a></p>

				<h3>SUMMARY OF THE B2B CFO PARTNERS, LLC OPERATING AGREEMENT</h3>

				<p>The following is a brief summary of certain provisions of the Operating Agreement for B2B CFO Partners, LLC (the "Operating Agreement"). This is just a summary and is subject in all respects to the actual terms of the Operating Agreement.</p>

				<h4>Purpose of the Company</h4>

				<p>The Company's purpose is to provide advisory and consulting services to small and medium size business, including but not limited to, consulting services in the areas of financial controls and accounting procedures ("Applicable Services").</p>

				<h4>Management of the Company</h4>

				<p>We are managed by a Managing Member, currently Jerry L. Mills (the "Initial Managing Member"), who oversees the day-to-day management of the Company, which includes the following actions:</p>
				<div class="indent_left">
				<p>(a) acquiring by purchase, lease, or otherwise any personal property that may be necessary, convenient, or incidental to the accomplishment of the purposes of the Company;<br />
				(b) executing agreements, contracts, etc., on behalf of the Company;<br />
				(c) borrowing money on behalf of the Company; securing the same by a lien or liens on any Company property;<br />
				(d) repaying any Company liabilities;<br />
				(e) making distributions to the Members;<br />
				(f) hiring employees and engaging independent contractors;<br />
				(g) establishing bank accounts;<br />
				(h) instituting, prosecuting, defending, settling, compromising, and dismissing lawsuits or other judicial or administrative proceedings brought on or in behalf of, or against, the Company or the Members in connection with activities arising out of, connected with, or incidental to this Agreement, and engaging counsel or others in connection therewith;<br />
				(i) taking such action as deemed appropriate, desirable and/or necessary to protect intellectual property owned or used by the Company;<br />
				(j) coordinating the recruiting of new Members;<br />
				(k) establishing the Admission Fee for new Members; and<br />
				(l) taking such other action as deemed appropriate, desirable and/or necessary to enhance the Company's business and/or operations.</p>
				</div>
				<p>We also have an Executive Committee comprised of seven elected Members that provides advice and guidance to the Managing Member and has certain other duties under the Operating Agreement including determining whether or not Members are to be expelled and determining the compensation, if any, to be received by officers who are appointed by the Managing Member and approved by a majority vote of the Executive Committee.</p>

				<h4>Membership in the Company</h4>

				<h5>Classes of Members</h5>

				<p>We have two classes of Members, Associate Members and Senior Members. Initially, all Members admitted to the Company are Associate Members until they have met the requirements to become Senior Members as described below. We have a Member Admission Committee that reviews applications for admission as a Member and determines whether an Associate Member qualifies to become a Senior Member.</p>

				<p>Applicants must be individuals who meet the following requirements in order to become an Associate Member in the Company:</p>
				<div class="indent_left">
				<p>
				(a) Sign the Operating Agreement;<br />
				(b) Make a capital contribution in the amount of $500;<br />
				(c) Pay the then applicable Admission Fee (currently $_________);<br />
				(d) Pay all travel related expenses;<br />
				(e) Provide a studio-quality photo, in business dress, with a dark blue background in a .jpg format;<br />
				(f) Pay a pro-rata share of the cost of the Company's Errors and Omissions Insurance policy; and<br />
				(g) Utilize the Company's domain name (b2bcfo.com) for all Company related matters.
				</p>
				</div>
				<p>To become a Senior Member, an Associate Member must:</p>
				<div class="indent_left">
				<p>
				(a) Submit an application to the Member Admission Committee and receive approval from the Committee;<br />
				(b) Make any required additional capital contribution as determined by the Managing Member from time to time (currently $_________); and<br />
				(c) Agree to a change in the Member's Shared Proceeds Percentage as determined by the Member Admission Committee.
				</p>
				</div>
				<p>Senior Member status will be forfeited if the Member's monthly gross collections fall below $12,500 for three consecutive months unless (i) the Managing Member determines the collection shortfall is due to extraordinary circumstances that are unlikely to continue, or (ii) the Member has retained Senior Member status for at least five consecutive years.</p>

				<h5>Retiring Events</h5>

				<p>A "Retiring Event" with respect to any Member is the Member's (a) withdrawal from the Company, (b) death, (c) disability (d) bankruptcy, or (e) expulsion with cause (see below). Upon the occurrence of a Retiring Event, the membership interest of the Member in question will be redeemed at a price equal to the Member's capital account balance as of the date of the occurrence of the Retiring Event and the Member will cease to be a Member and have no further right to participate in the Company's business, profits, losses, or distributions.</p>

				<h5>Inactive Status</h5>

				<p>If a Member wishes to provide services outside of his or her capacity as a Member in the Company, the Member may request that he or she be granted Inactive Member status by submitting a written request to the Managing Member specifying the reasons for the request. The Managing Member has 10 days to grant or deny the request. If inactive status is granted, an Inactive Member may reactivate his or her status as an Active Member by submitting a written notice to the Managing Member specifying a date no later than 24 months after the date inactive status was granted. Date on which the Inactive Member will resume providing Applicable Services (the "Reactivation Date"). Once reactivated, the Member in question will once again become an Active Member credited with all Points accrued up to the date inactive status was granted. While inactive, the Inactive Member may not render any services in the name of the Company or use the Member's email address under the Company's domain name, and will not receive any distributions from the Company.</p>

				<h5>Expulsion of a Member</h5>

				<p>Members, including Senior Members, are subject to expulsion from the Company in the event that the Member commits an Adverse Act, which means a Member's failure to perform his or her obligations under the Operating Agreement. Among acts that can result in expulsion of a Member under the Operating Agreement are:</p>

				<div class="indent_left">
				<p>
				(a) acting as an employee or officer of a client or allowing a client to represent that the Member is an employee or officer of a client in the client's stationery or business cards or on the client's website or any electronic media, including, but not limited to, LinkedIn;<br />
				(b) conviction of any crime involving moral turpitude, fraud or misrepresentation; commission of any act that would constitute a felony and that would adversely impact the business or reputation of the Company;<br />
				(c) an act of fraud against the Company or any misappropriation or embezzlement of Company funds or property;<br />
				(d) willful conduct that is materially injurious to the reputation, business or business relationships of the Company; and<br />
				(e) Providing services as a Member of the Company to any person or company engaged in any activity that is or can be construed in the reasonable determination of the Managing Member as violating federal laws or regulations, regardless of whether or not any such activity is in accordance with the laws of a particular state. For example, providing services to any person or company engaged in the marijuana industry in such a fashion to be violative of federal laws or regulations concerning controlled substances would be an Adverse Act.</p>
				</div>

				<h5>Members' Billing and Collection of Revenues</h5>

				<p>Each Member is for the billing and collection of any revenues he or she generates by providing Applicable Services. All revenues collected by a Member must be deposited one or more bank accounts established by the Member (each such account constituting a "Member Account"). A Member Account must be in the name of the Member, and Members may not utilize the Company's name, or the trade name "B2B CFO" on such accounts. In all cases, however, a Member must, while dealing with a Member Account, comply with the terms of our Operating Agreement and act in a fiduciary capacity for the benefit of the Company.</p>

				<h5>Retained and Shared Proceeds</h5>

				<p>All revenues received by a Member in connection with providing Applicable Services, except for the "Shared Proceeds" portion of the revenues, are retained by the Member ("Retained Proceeds"). A Member's Shared Proceeds is the Member's gross revenues multiplied by the Member's Shared Proceeds Percentage, which is a percentage established by the Member Admission Committee and the Member in question at the time such Member becomes a Member and set forth on the Member's signature page to the Operating Agreement as signed by the Company's Managing Member and the Member in question or otherwise established in a writing signed by the Member in question. The Shared Proceeds Percentage may vary among Members. In addition, the Member Admission Committee may revise, in its sole discretion, a Senior Member's Shared Proceeds Percentage in connection with the change of such Member's status from Associate Member to Senior Member, provided that such Member is notified in writing of any such revision prior to such Member accepting Senior Member status. A Member's Shared Proceeds are delivered monthly to the Company's executive offices along with a Shared Proceeds Report detailing the amount of Shared Proceeds and how the amount was derived. Members are responsible for paying any expenses they incur in connection with providing Applicable Services out of their Retained Proceeds.</p>

				<h5>Distributions to Members</h5>

				<p>The amount of distributions a Member receives is equal to the Member's Retained Proceeds plus the Member's share of the Company's Distributable Cash. The Company's Distributable Cash for a particular Distribution Period shall be distributed to the Members as follows: 35% shall be distributed to Jerry Mills as the Initial Managing Member; 13% shall be split among all of the Members, pro rata based upon their respective Sharing Ratios for the Distribution Period in question; and 52% shall be split among the Senior Members pro rata based upon their respective Sharing Ratios for the Distribution Period in question. Such distributions shall occur semi-annually on or before January 31st and July 31st of each year. The percentage to be received by the Initial Managing Member may be changed pursuant to an agreement between the Initial Managing Member and the Executive Committee, provided that any increase in the percentage above 35% shall require approval from Members holding a majority of votes held by all Members. The percentage to be received by any Managing Member other than the Initial Managing Member shall be determined pursuant to an agreement between such Managing Member and the Executive Committee, provided that any percentage above 35% shall require approval from Members holding a majority of votes held by all Members. Any reduction (increase) in the Managing Member's percentage below (above) 35%, shall be split 20% among all of the Members and 80% among the Senior Members.</p>

				<p>A Member's "Sharing Ratio" shall mean the ratio that the number of Points accumulated by such Member during the Distribution Period in question bears to the aggregate number of Points accumulated by all Members during the same period. Notwithstanding the above, the Sharing Ratio of any Person who is not a Member as of the last day of a Distribution Period will be 0% for such Distribution Period. Members accumulate Points based upon a Points System that reward Members in various categories such as earnings, recruiting new Members, external promotion of the Company, internal activity within the Company such as publishing articles or stories in the Company's newsletter and various internal administration activities.</p>

				<p>The Company's "Distributable Cash" means the aggregate capital contributions of the Members plus any Shared Proceeds, less any portion of the foregoing that is (a) paid to the Managing Member monthly as a percentage of Net Cash Flow, or (b) used to pay or establish reserves for all Company expenses, debt payments, and contingencies, all as determined by the Managing Member. Distributable Cash shall not be reduced by depreciation, amortization, cost recovery deductions, or similar allowances, but shall be increased by any reductions of reserves previously established pursuant to the immediately preceding sentence.</p>

				<p>A "Distribution Period" means the period from January 1st to the following June 30th in the case of distributions of Distributable Cash made on July 31st of each year, and the period from July 1st to the following December 31st in the case of distributions of Distributable Cash made on January 31st of each year.</p>

				<h5>Restrictions on Transfer</h5>

				<p>Except for transfers of a Member's interest upon death, Members may not transfer their interest in the Company without the prior written consent of the Managing Member, and any transfer or attempted transfer by any Member is null and void.</p>

				<h4>Confidentiality Obligations</h4>

				<p>Members agree that any and all information related to the actual or anticipated business affairs of the Company that has not been made available to the general public constitutes the Company's confidential information and is to be held in the strictest confidence in a fiduciary capacity for the sole benefit of the Company. As such, the Company's confidential information is not be to disclosed or used in any way to the detriment of the Company. Members also acknowledge and agrees that all Company confidential information is and shall be the sole and exclusive property of the Company and that any and all information developed or acquired, or works created, or inventions, improvements, developments, processes or methods, extensions, copyrightable works, confidential ideas, discoveries, improvements, advancements and trade secrets that may be made, conceived, invented, acquired or suggested by the Members, resulting from disclosure of the confidential information to Members, is the sole and exclusive property of the Company. Members further understand and agree that any and all confidential information and other materials or information that a Member otherwise develops or creates as a consequence of or through a Member's relationship with the Company is the sole and exclusive property of the Company.</p>

				<p>Members also agree not to improperly use or disclose any proprietary information or trade secrets of any former or concurrent employer or other person or entity or bring onto the premises of the Company any unpublished document or proprietary information belonging to any such employer, person or entity unless consented to in writing by such employer, person or entity.</p>

				<hr />

				<h3>EXHIBIT B-1</h3>

				<h3>REQUIREMENTS FOR ADMISSION AS MEMBER OF COMPANY</h3>

				<p>Any Person must meet the following requirements in order to be admitted as an Associate Member in the Company:</p>
				<div class="indent_left">
				<p>(a) Signature of this agreement by the applicant.<br />
				<br />
				(b) A Person shall make a Capital Contribution of $500 due immediately upon admission to the Company; provided that Persons who, prior to their admission to the Company, acquired rights to use of the Subject Intellectual Property, shall, by their admission to the Company, be deemed to have assigned such rights to the Company as their Capital Contribution in lieu of the $500 contribution.<br />
				<br />
				(c) The payment of the then applicable Admission Fee.<br />
				<br />
				(d) The payment of all travel related expenses.<br />
				<br />
				(e) Provide a studio-quality photo, in business dress, with a dark blue background in a .jpg format to the Managing Member.<br />
				<br />
				(f) The Payment of the Member's pro-rata share (as determined by the Managing Member) of the cost of the Company's Errors and Omissions Insurance policy.<br />
				<br />
				(g) All Members shall utilize the Company's domain name as selected by the Managing Member for email correspondence. The approved domain name is b2bcfo.com.<br />
				<br />
				(h) As of January 1, 2014 only individuals may be admitted as Associate Members.</p>
				</div>

				<hr />						

			</div>
		</div>
		<?php
	} else {
		echo "<div class='alert alert-danger' role='alert'>ERROR: Either the username or the password did not match correctly.</div>";
	}

	mysqli_close($db);
	// https://secure.na1.adobesign.com/public/esignWidget?wid=CBFCIBAA3AAABLblqZhCcdj2B52Dtp0l-GIl2oVUhfcjVXXTpYDMQn2-irt2QT3l9AXSh6CTieitLXNNl574* 4/22/2024 OA
	// https://secure.na1.adobesign.com/public/esignWidget?wid=CBFCIBAA3AAABLblqZhBSvZ3vPO_rEzEQyeEdDb-mFgUmF2Nomc6S76I4lmZvdlYkM6MvAmp2cdJjeAmUHDA* 3/11/2024 OA
	// https://secure.na1.adobesign.com/public/esignWidget?wid=CBFCIBAA3AAABLblqZhDpqaErttSl04iMEU2wrxqPrJbZ1J2sTl-efdH0rOFNwtF9KRVHXEy-0mZNo7QPruc* 8/14/2023 OA
	// https://secure.na1.adobesign.com/public/esignWidget?wid=CBFCIBAA3AAABLblqZhAItSFh-6W6MXvgKKdiqKt02QB4ijiI640I0dyyJuAR04G1HyrQDja3mvLaUmXp1I0* 7/5/2023 OA
	// https://secure.na1.adobesign.com/public/esignWidget?wid=CBFCIBAA3AAABLblqZhCJdDtIwFyKy6x1DdS8BbxeXSomcIGYYRPH0vjFQp0oQHgIkIopyEKYa98J0iTsVHs* 7/1/2023 OA
	// https://secure.na1.echosign.com/public/esignWidget?wid=CBFCIBAA3AAABLblqZhD-3jgXIy748ijheDpGI6NiW60qIRknyeiODoFNXO-Y5SfOhHEx9YdI75J5IZJY9H0*  3/1/2022 OA 
	

} else {
	?>
	<div class="row">
		<div class="col-md-12">

		<form action="" method="post">
        <table style="width: 100%; margin-top: 10px;">
            <tr>
              <td class="first-child">
                <label for="form-username">Username</label>
              </td>
              <td class="input"><input type="text" value="" id="form-username" name="purl_un" /></td>
            </tr>
          <tr>
            <td class="first-child">
              <label for="form-password">Password</label>			
            </td>
            <td class="input"><input type="password" value="" id="form-password" name="login_pw" /></td>
          </tr>
          <tr>
            <td class="first-child">&nbsp;
			<!--  -->
			</td>
            <td class="input"><input type="submit" value="Login" />
			</td>
          </tr>
          <!-- <tr>
            <td class="first-child" colspan="2">
			<p class="forgotlink"><a href="/forgot-password.php">Login with your email address</a></p>
			</td>
          </tr> -->
        </table>		
      </form>
		
		</div>
	</div>
	<?php
}
?>
@endsection