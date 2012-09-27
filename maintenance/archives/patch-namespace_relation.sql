-- Table containing namespace relationships.
-- ie: Things like "User_talk is the 'talk' of User"
-- 'subject' must never be used in the type. 'subject' is always inferred as a reverse relationship.
-- Added 2012-09-23
CREATE TABLE /*_*/namespace_relation (
  -- The namespace the relationship originates 'from'.
  -- In the case of a 'talk' relationship this is the subject page.
  nsr_from int NOT NULL,
  -- The type of relation. This MUST match the ns_type for the namespace identified by nsr_to.
  nsr_type varbinary(255) NOT NULL,
  -- The namespace the relationship points 'to'.
  -- In the case of a 'talk' relationship this is the talk page.
  nsr_to int NOT NULL
) /*$wgDBTableOptions*/;
-- Index nsr_from so we can query all the relationships for a namespace
CREATE INDEX /*i*/namespace_relation_nsr_from ON /*_*/namespace_relation (nsr_from);
-- Every namespace can only have one of a type of relationship.
CREATE UNIQUE INDEX /*i*/namespace_relation_nsr_from_type ON /*_*/namespace_relation (nsr_from, nsr_type);
-- Index the on nsr_to so we can query the reverse relationship.
-- Because a namespace may only be the target of one relationship we make this unique.
CREATE UNIQUE INDEX /*i*/namespace_relation_nsr_to ON /*_*/namespace_relation (nsr_to);
