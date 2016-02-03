Members:
  Jerry Jia(Ruoqi Jia)
  Martin Minkov
  Hank Lo

/*----------------------------------
		Coding Conventions: 
 -----------------------------------*/
​
/* Notes:
	-Don't throw in extra comments that you don't need. Put comments at places that you think that people might not understand.
		too much comments can make code base crowded and unreadable. 
​
	-Try to avoid heavy functional programming methodology. It looks good and danky but hard to understand when read by others 
		ex: int i = dothis(dothat(1000 * 4)->dosomethingelse(domore()));	// why you do dis?
​
	-Make code blocks readable, try not to crowd everything in one chunk, leave extra new lines between function calls.	
​
	-Modularize functions, dont make 1 giant function. Break it up for readers to take a break.
*/
​
​
/* descriptive / consistent variable names 
		ex: A variable that contains the player's movement speed 
*/
int pms; 			// bad
int p_move_speed;	// good
​
​
/* 
   private variables declared with a "_" in the front
*/
private Transform  _transform;
​
​
/* 
  descriptive / consistent function names (especially for API calls)
  		ex: Function that retrieves data packets from server
*/
public SomeStruct get_p(); 					// needs to make it more explicit
public SomeStruct RetriveServerPackets();	// easier to call from an IDE (Auto complete). 
​
/* 
   private functions declared with lowercase seperated with "_"
   public functions declared Uppcaes for every word
*/
private void attemp_move();					// see if the player can move, check for blockables in its path
public void GetPlayerPosition();			// retrieves the 2D vector of where the player is currently at
#######################
Starter Webapp - Quotes
#######################

This is the starter webapp for Tutorial ci-normal01

It is purposefully broken.

**************
Intended Usage
**************

Fork this project.
Clone it locally.
Create a "develop" branch based on "master".
Fix it per tutorial "normal01".

***************
Project Folders
***************

/application    the obvious
/assets         CSS, javascript & media
/data           some pictures to use

Assumed: CI system folder is in ../system3

If you change the system folder configuration setting, your webapp will break
when I try to test it on my system!

*******
License
*******

Please see the `license
agreement <https://codeigniter.com/userguide3/license.html>`_

*********
Resources
*********

-  `Informational website <https://codeigniter.com/>`_
-  `Source code repo <https://github.com/bcit-ci/CodeIgniter/>`_
-  `User Guide <https://codeigniter.com/userguide3/>`_
-  `Community Forums <https://forum.codeigniter.com/>`_
-  `Community Wiki <https://github.com/bcit-ci/CodeIgniter/wiki/>`_
-  `Community IRC <https://codeigniter.com/irc>`_

***************
Acknowledgement
***************

This webapp was written by James Parry, Instructor in Computer Systems
Technology at the British Columbia Institute of Technology,
and Project Lead for CodeIgniter.

CodeIgniter is a project of B.C.I.T.
