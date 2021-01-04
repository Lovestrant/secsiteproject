import * as functions from 'firebase-functions';
import * as admin from 'firebase-admin';
admin.initializeApp();

var env = functions.config();


import * as algoliasearch from 'algoliasearch';
//initialize the algolia client
const client = algoliasearch(env.algolia.appid, env.algolia.apikey);

const index = client.initIndex('secsitesearch');

exports.indexdoc = functions.firestore
.document('secsitesearch')
.oncreate((snap, context) => {
    const data = snap.data();
    const objectId = snap.id;

    //add data to algolia index

    return index.addObject({
        objectId,
        ...data
    });
});

exports.unindoc = functions.firestore
    .document('secsitesearch')
    .onDelete((snap, context) => {
        const objectId = snap.id;

        //delete an id from the index
        return index.deleteObject(objectId);
    });