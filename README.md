# CPA-Funding-Application-System
Team Members: Jimmy Thakkar - Frontend Developer, Kathleen Dunn - Backend Developer, drphamwit - Developer
# Project Description
 ## What?
 	This project is to create a webpage for the City of Boston Community Preservation Act to make the already existing funding application system into its own webpage and improve on what already exists and add features that make it easier for both applicants and reviewers.
## What is Being Used?
### Front End
	- HTML
	- CSS
	- JavaScript
### Back End
	- MySQL
	- PHP
### Tools
	- Git/GitHub
	- XAMPP
	- Sublime 3
## Deliverables
	1) CPA Funding Webpage
	2) User Management
		a) User Account Features
			- A user creates a new account
			- A user logs into the system using the account created in 1
			- A user edits the account infromation
	3) Application Management
		a) Application Submission Features
			- An applicant creates a new application
			- An applicant opens/fills out application forms
			- An applicant edits/saves/deletes/withdraws/submits an application
			- An applicant uploads files for an application
		b) Application Review Features
			- A manager assigns reviewers for an application
			- A manager sets application staus
			- A manager sees feedback from reviewers
			- A reviewer see review feedback
			- A reviewer accepts/rejects a review request
			- A reviewer edits/saves/submits feedback
		c) Reporting Features (if time allows)
			- A manager generates reports on an application
			- A reviewer downloads accumulated reports on an application for review
	4) Documentation and Testing
## Getting Started

### Install
	1. Go to https://www.sublimetext.com/3 to install Sublime Text 3
		- If you want you can use any other text editor of your choice. Sublime, however is free.
	2. Go to https://www.apachefriends.org/index.html to install XAMPP.
		- XAMPP is a free software that helps you host the website on your local machine.
	3. Download the soucre code
	4. Once you have downloaded the source code file,
		- Open Folders
		- Click on Local Disk (C:)
		- Click on xampp folder
		- Open the htdocs folder
		- Delete everything in that folder
		- Once you have deleted everything, Create a new folder and name it SeniorProject (Or anything you like).
		- Drag all the source files that you downloaded into the new folder you created in htdocs.
	5. Now go back to the xampp folder and scroll all the way down until you see xampp-control.exe
	6. Open xampp-control.exe
	7. Once you open the program:
		- Click Start next to Apache
		- Click Start next to MySQL
	8. To test if everything is working.
		- Open up any internet browser.
		- In the URL, type 'localhost'
		- You should see a link called SeniorProject/ (Or the name of the folder you created in htdocs)
		- Click on that link
		- Once you click, it should bring you to Login or Registration Page of Community Preservation Website.
		- This means you have successfully hosting the website on your local machine.
	9. However you are not done. You will need to create your own database. In order to have the website fully functioning.
	10. In the URL, type 'localhost/phpmyadmin/'
		- Then click on the Database tab.
		- In the Database field, type 'register'. And click Create.
		- Once you created the register database, open it.
		- Then under where it says Create Table, Enter 'users' for the name and enter 9 for the Number of Columns.
		- Enter the following for each row:
			Name:		Type:		Length/Values:
			
			id		INT		6 		(AUTO INCREMENT)
			username	VARCHAR		30
			password	VARCHAR		225
			email		VARCHAR		100
			activated	ENUM		'0', '1'
			avatar		VARCHAR		225
			reset_link	VARCHAR		2555
			join_date	TIMESTAMP	
			role		ENUM		'user', 'admin'
			
	11. Create anoter Database
		- In the Database field, type 'form'. And click Create.
		- Once you created the form database, open it.
		- Then under where it says Create Table, Enter 'eform' for the name and enter 61 for the Number of Columns.
		- Enter the following for each row:
			Name:				Type:		Length/Values:
			
			id				INT		11		(AUTO INCREMENT)
			eStatus				VARCHAR		50
			email				VARCHAR		100
			projectName			VARCHAR		50
			shortProjectDescription		VARCHAR		1000
			projectStreetAddress		VARCHAR		200
			projectNeighborhood		VARCHAR		200
			projectZip			VARCHAR		5
			applicantOrg			VARCHAR		100
			contactPersonTitle		VARCHAR		100
			phoneNumber			VARCHAR		10
			amountRequested			VARCHAR		10
			totalProjectCost		VARCHAR		10
			fundingNeed			VARCHAR		1000
			fundingSources			VARCHAR		200
			checkfundingRequest		VARCHAR		200
			constructionDesign		VARCHAR		250
			propertyOwner			VARCHAR		
			uploadAgreement			VARCHAR
			expectedStartDate		VARCHAR
			expectedCompleteDate		VARCHAR
			pickCategory			VARCHAR
			yourProject			VARCHAR
			intendedUsers			VARCHAR
			generalPublic			VARCHAR
			masterPlan			VARCHAR
			maintenance			VARCHAR
			historicLandscape		VARCHAR
			publicArt			VARCHAR
			cStatus				VARCHAR
			cEmail				VARCHAR
			cProjectName			VARCHAR
			cProjectNeighborhood		VARCHAR
			cProjectZip			VARCHAR
			cApplicantOrg			VARCHAR
			cContactPersonTitle		VARCHAR
			cPhoneNumber			VARCHAR
			cPickCategory			VARCHAR
			cAmountRequested		VARCHAR
			cTotalProjectCost		VARCHAR
			cShortProjectDescription2	VARCHAR
			cProjectSummary			VARCHAR
			cNeedsAssessment		VARCHAR
			cProjectTimeline		VARCHAR
			cExperienceCapacity		VARCHAR
			cOrganizationalPlan		VARCHAR
			cPublicBenefit			VARCHAR
			cCommunitySupport		VARCHAR
			cSustainability			VARCHAR
			cProjectGoals			VARCHAR
			cBudgetExplanation		VARCHAR
			cUploadPropertyControl		VARCHAR
			cUploadCouncilSupport		VARCHAR
			cUploadCommunitySupport		VARCHAR
			cUploadAppearance		VARCHAR
			cUploadDesign			VARCHAR
			cUploadResult			VARCHAR
			cUploadBudget			VARCHAR
			cUploadIRS			VARCHAR
			cUploadProfit			VARCHAR
			cUploadBalance			VARCHAR
			
		
		
### Demonstration Video
	- https://www.youtube.com/watch?v=Pr-JMqTkdEM
