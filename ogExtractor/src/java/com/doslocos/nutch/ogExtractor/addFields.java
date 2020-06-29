package com.doslocos.nutch.ogExtractor;

import org.apache.hadoop.conf.Configuration;
import org.apache.hadoop.io.Text;
import org.apache.nutch.crawl.CrawlDatum;
import org.apache.nutch.crawl.Inlinks;
import org.apache.nutch.indexer.IndexingException;
import org.apache.nutch.indexer.IndexingFilter;
import org.apache.nutch.indexer.NutchDocument;
import org.apache.nutch.parse.Parse;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

public class addFields implements IndexingFilter {

	public static final Logger LOG = LoggerFactory.getLogger(addFields.class);
	public static Configuration conf;

	@Override
	public Configuration getConf() {
		return this.conf;
	}

	@Override
	public void setConf(Configuration conf) {
		addFields.conf = conf;
	}

	@Override
	public NutchDocument filter(NutchDocument doc, Parse parse, Text url, CrawlDatum datum, Inlinks inlinks)
			throws IndexingException {
		
		for (String ogTag :parse.getData().getParseMeta().names() ){
		
			
			if ( ogTag.substring(0,3).equals( "og:" ) )  {
				doc.add( ogTag , parse.getData().getParseMeta().get( ogTag ) );
			}
		}

		return doc;
	}

}
