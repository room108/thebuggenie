<?php

	/**
	 * actions for the tracplugin module
	 */
	class tracpluginActions extends TBGAction
	{

		/**
		 * Index page
		 *
		 * @param TBGRequest $request The incoming request
		 */
		public function runIndex(TBGRequest $request)
		{
		}

		public function runSetStatus(TBGRequest $request)
		{
			try
			{
				$issue = TBGContext::factory()->TBGIssue($request['issue_id']);
				$issue->setStatus($request['status_id']);
				$issue->save();
				return $this->renderJSON(array('issue_id' => $issue->getID(), 'changed' => true, 'field' => array('status' => $issue->getStatus())));
			}
			catch (Exception $e)
			{
				throw $e;
				return $this->renderJSON(array('error' => $e->getMessage()));
			}
		}
	}

