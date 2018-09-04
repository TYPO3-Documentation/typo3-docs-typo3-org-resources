// manually maintained list of system extensions
// mb, 2015-11-22, 2016-01-27

// merge list 'systemExtensionList' into list 'extensionList'

var systemExtensionList = [
	{"key":"dummydummy","latest":"latest","versions":["7.6","latest"]}
];

// var extensionList needs to exist at this point
// merge var systemExtensionList into var extensionList
// we expect the lists to be sorted

var t3extkey;
var j = 0;

// Loop on all extension to find an exact match first
for (var i = 0; i < systemExtensionList.length; i++) {
	t3extkey = systemExtensionList[i].key;
	while (j < extensionList.length) {
		if (t3extkey < extensionList[j].key) {
			extensionList.splice(j, 0, systemExtensionList[i]);
			t3extkey = '';
			j++;
			break;
		} else if (extensionList[j].key == t3extkey) {
			extensionList.splice(j, 1, systemExtensionList[i]);
			t3extkey = '';
			j++;
			break;
		} else {
			j++;
		}
	}
	if (t3extkey.length) {
		extensionList.push(systemExtensionList[i]);
		j = extensionList.length;
	}
}
