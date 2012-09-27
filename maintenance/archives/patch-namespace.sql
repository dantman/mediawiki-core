-- Table holding the wiki's namespace definitions
-- Added 2012-09-23
CREATE TABLE /*_*/namespace (
  -- Namespace number for the namespace.
  -- This is NOT auto-incrementing and carries some historical meaning.
  ns_id int NOT NULL PRIMARY KEY,
  -- 
  ns_key varbinary(255) NOT NULL,
  -- The type of namespace. Right now 'subject', 'talk', and 'special' are the only
  -- valid values. But we leave room open in the future for other relationships.
  ns_type varbinary(255) NOT NULL,
  -- An ID pointing to the specific namespace_text entry
  -- which defines the canonical text form of this namespace.
  -- This may be null TEMPORARILY after namespace is inserted but before a namespace_text is inserted.
  ns_canonical int unsigned,
  -- Serialized blob of namespace settings.
  -- eg: search by default, use subpages, etc... extensions may define other settings too.
  ns_settings blob NOT NULL
) /*$wgDBTableOptions*/;
CREATE UNIQUE INDEX /*i*/namespace_ns_key ON /*_*/namespace (ns_key);
