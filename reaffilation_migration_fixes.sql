-- put old node id into user profile form
insert into user__field_old_affiliation_nid
select 'user', 0, uid, uid, 'en', 0, a.sourceid1
from migrate_map_d7_node_reaffiliation_application a, webform_submission b
where a.destid1 = b.sid;


-- make sure URLs start with http://
update webform_submission_data set value = concat('http://',value)
where name = 'website_address' and value is not null and value != '' and
value not like 'http%';
