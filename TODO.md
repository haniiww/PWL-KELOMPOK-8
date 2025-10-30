# Organize and Fix Broken Code Connections

## Issues Identified
- Duplicate files in root and pages/ directories
- Inconsistent include paths for headers and footers
- Some pages use components/, others use root or User_input/
- Paths in links are sometimes incorrect
- Username not displaying in profile page due to database connection issues

## Plan
1. **Standardize Structure:**
   - Keep main pages in pages/ directory
   - Use components/ for shared elements (header.php, footer.php)
   - Remove duplicate files from root

2. **Fix Header Includes:**
   - Use dynamic header.php from User_input/ (checks session for logged in/out)
   - Update all pages to include '../User_input/header.php' or appropriate path
   - Remove static header from components/ if not needed

3. **Fix Footer Includes:**
   - Ensure all pages include '../components/footer.php'

4. **Fix Link Paths:**
   - Update href paths in pages to be relative correctly

5. **Remove Duplicates:**
   - Delete duplicate files in root that exist in pages/

6. **Fix Database Issues:**
   - Improve error handling in profile page
   - Ensure database connection works properly

## Tasks
- [x] Move dynamic header.php to User_input/ and update includes
- [x] Update all page includes to use consistent paths
- [x] Fix link paths in homepage.php carousel
- [x] Remove duplicate files from root
- [x] Test navigation and includes work correctly
- [x] Fix username display in profile page with better error handling

## Current Status
- Identified duplicate files: homepage.php, logIn.php, signup.php, profile.php, detail-movie.php, Payment-Method.php, proof.php exist in both root and pages/
- User_input/header.php is dynamic (checks session), components/header.php is static
- Some pages include from components/, others from root or User_input/
- Link paths in pages/homepage.php use ../pages/ which is incorrect
- Username display issue resolved with improved error handling

## Followup Steps
- Run the site locally to verify all pages load without errors
- Check login/logout functionality
- Ensure all links work properly
- Verify database connectivity and user data display
