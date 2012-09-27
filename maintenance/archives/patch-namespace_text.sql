-- Table containing the actual namespace text and aliases
-- for namespaces in the namespaces table
-- Added 2012-09-23
CREATE TABLE /*_*/namespace_text (
  nst_id int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
  -- Namespace number (namespace.ns_id) this namespace text belongs to.
  nst_namespace int NOT NULL,
  -- Normalized text for this namespace text. Used for queries, equality, etc...
  nst_key varbinary(255) NOT NULL,
  -- Non-normalized text for this namespace. Used for output of the namespace text name.
  nst_text varbinary(255) NOT NULL
) /*$wgDBTableOptions*/;
CREATE INDEX /*i*/namespace_text_nst_namespace ON /*_*/namespace_text (nst_namespace);
CREATE UNIQUE INDEX /*i*/namespace_text_nst_key ON /*_*/namespace_text (nst_key);
