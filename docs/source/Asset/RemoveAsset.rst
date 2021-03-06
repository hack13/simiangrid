RemoveAsset Method
==================

Remove the specified asset from the asset service.

Request Format
--------------

Sample request: ::

    DELETE /assets/9b99f145-37d6-4f7b-b898-13f0035fb437 HTTP/1.1


Response Format
---------------

Asset successfully removed: ::

    HTTP/1.1 204 No Content
    Date: Wed, 09 Dec 2009 07:36:06 GMT
    Server: Apache/2.2.10 (Linux/SUSE)


Asset not found: ::

    HTTP/1.1 404 Not Found
    Date: Wed, 09 Dec 2009 07:36:06 GMT
    Server: Apache/2.2.10 (Linux/SUSE)


Supported Response Codes
^^^^^^^^^^^^^^^^^^^^^^^^

 * 204: Asset was removed from the asset service
 * 404: Asset was not found
 * 500: Internal server error occurred
