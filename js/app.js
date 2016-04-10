var newsApp = angular.module('News', []);

newsApp.controller('NewsCtrl', [
'$scope',
function($scope) {
	$scope.posts = [
		{title: 'Fetch1', link:'attendance.html'},
		{title: 'Fetch2', link:'attendance.html'},
		{title: 'Fetch1', link:'attendance.html'},
		{title: 'Fetch2', link:'attendance.html'}
	];
}]);

var subApp = angular.module('Subject', []);

subApp.controller('subCtrl', [
'$scope',
function($scope) {
	$scope.subjects = [
		{code: 'IT1001', subName: 'Microprocessors', hrsMissed: 3, hrsAtt: 11, hrsTaken: 14, attPerc: 78, mCT1: 8, mCT2:9, mMODEL: 14, mFINAL: 25, mST:4, mAtt: 4, mTOTAL: null},
		{code: 'IT1002', subName: 'OO Concepts', hrsMissed: 3, hrsAtt: 11, hrsTaken: 14, attPerc: 78, mCT1: 8, mCT2:9, mMODEL: 14, mFINAL: 25, mST:4, mAtt: 4, mTOTAL: null},
		{code: 'IT1001', subName: 'Microprocessors', hrsMissed: 3, hrsAtt: 11, hrsTaken: 14, attPerc: 78, mCT1: 8, mCT2:9, mMODEL: 14, mFINAL: 25, mST:4, mAtt: 4, mTOTAL: null},
		{code: 'IT1002', subName: 'OO Concepts', hrsMissed: 3, hrsAtt: 11, hrsTaken: 14, attPerc: 78, mCT1: 8, mCT2:9, mMODEL: 14, mFINAL: 25, mST:4, mAtt: 4, mTOTAL: null},
		{code: 'IT1001', subName: 'Microprocessors', hrsMissed: 3, hrsAtt: 11, hrsTaken: 14, attPerc: 78, mCT1: 8, mCT2:9, mMODEL: 14, mFINAL: 25, mST:4, mAtt: 4, mTOTAL: null},
		{code: 'IT1002', subName: 'OO Concepts', hrsMissed: 3, hrsAtt: 11, hrsTaken: 14, attPerc: 78, mCT1: 8, mCT2:9, mMODEL: 14, mFINAL: 25, mST:4, mAtt: 4, mTOTAL: null},
		{code: 'IT1001', subName: 'Microprocessors', hrsMissed: 3, hrsAtt: 11, hrsTaken: 14, attPerc: 78, mCT1: 8, mCT2:9, mMODEL: 14, mFINAL: 25, mST:4, mAtt: 4, mTOTAL: null,},
		{code: 'IT1002', subName: 'OO Concepts', hrsMissed: 3, hrsAtt: 11, hrsTaken: 14, attPerc: 78, mCT1: 8, mCT2:9, mMODEL: 14, mFINAL: 25, mST:4, mAtt: 4, mTOTAL: null}
	];
}]);